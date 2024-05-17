<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class FilterQueryBuilder
{
    protected $model;

    protected $table;

    public function apply($query, $data)
    {
        $this->model = $query->getModel();
        $this->table = $this->model->getTable();

        if (isset($data['f'])) {
            foreach ($data['f'] as $filter) {
                $filter['match'] = $data['filter_match'] ?? 'and';
                $this->makeFilter($query, $filter);
            }
        }

        $this->makeOrder($query, $data);

        return $query;
    }

    public function contains(array $filter, $query)
    {
        $filter['query_1'] = addslashes((string) $filter['query_1']);

        return $query->where($filter['column'], 'like', '%'.$filter['query_1'].'%', $filter['match']);
    }

    protected function makeOrder($query, array $data)
    {
        if ($this->isNestedColumn($data['order_column'])) {
            [$relationship, $column] = explode('.', (string) $data['order_column']);
            $callable = Str::camel($relationship);
            $belongs = $this->model->{$callable}(
            );
            $relatedModel = $belongs->getModel();
            $relatedTable = $relatedModel->getTable();
            $as = 'prefix_'.$relatedTable;

            if ( ! $belongs instanceof BelongsTo) {
                return;
            }

            $query->leftJoin(
                sprintf('%s as %s', $relatedTable, $as),
                $as.'.id',
                '=',
                sprintf('%s.%s_id', $this->table, $relationship)
            );

            $data['order_column'] = sprintf('%s.%s', $as, $column);
        }

        $query
            ->orderBy($data['order_column'], $data['order_direction'])
            ->select($this->table.'.*');
    }

    protected function makeFilter($query, array $filter)
    {
        if ($this->isNestedColumn($filter['column'])) {
            [$relation, $filter['column']] = explode('.', (string) $filter['column']);
            $callable = Str::camel($relation);
            $filter['match'] = 'and';

            $query->orWhereHas(Str::camel($callable), function ($q) use ($filter): void {
                $this->{Str::camel($filter['operator'])}(
                    $filter,
                    $q
                );
            });
        } else {
            $filter['column'] = sprintf('%s.%s', $this->table, $filter['column']);
            $this->{Str::camel($filter['operator'])}(
                $filter,
                $query
            );
        }
    }

    protected function isNestedColumn($column): bool
    {
        return str_contains((string) $column, '.');
    }
}
