<?php

declare(strict_types=1);

namespace App\Traits;

trait WithTagsAssociation
{
    public $tags_selected = [];

    /** @var int[] */
    public array $associateTags = [];

    /** @param array{value: string} $choices */
    public function updatedTagsSelected(string $value): void
    {
        if ( ! in_array($value, $this->associateTags)) {
            $this->associateTags[] = (int) $value;
        } else {
            $key = array_search($value, $this->associateTags, true);
            unset($this->associateTags[$key]);
        }
    }
}
