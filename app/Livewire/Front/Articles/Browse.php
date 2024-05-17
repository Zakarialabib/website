<?php

declare(strict_types=1);

namespace App\Livewire\Front\Articles;

use App\Models\Article;
use App\Models\Tag;
use App\Traits\WithInfiniteScroll;
use App\Traits\WithTags;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.front')]
final class Browse extends Component
{
    use WithInfiniteScroll;
    use WithTags;

    public string $viewMode = 'list';

    /** @var array[] */
    protected $queryString = [
        'tag'    => ['except' => ''],
        'sortBy' => ['except' => 'recent'],
    ];

    public function mount(): void
    {
        $this->viewMode = session('viewMode', $this->viewMode);
    }

    public function changeViewMode(string $mode): void
    {
        session()->put('viewMode', $mode);

        $this->viewMode = $mode;
    }

    public function validSort(string $sort): bool
    {
        return in_array($sort, [
            'recent',
            'popular',
            'trending',
        ]);
    }

    public function render(): View
    {
        $articles = Article::with(['tags'])
            // ->withCount(['views', 'reactions'])
            ->orderByDesc('created_at');

        $tags = Tag::orderBy('name')->get();

        $selectedTag = Tag::where('slug', $this->tag)->first();

        if ($this->tag) {
            $articles->forTag($this->tag);
        }

        $articles->{$this->sortBy}();

        return view('livewire.front.articles.browse', [
            'articles'       => $articles->paginate($this->perPage),
            'tags'           => $tags,
            'selectedTag'    => $selectedTag,
            'selectedSortBy' => $this->sortBy,
        ]);
    }
}
