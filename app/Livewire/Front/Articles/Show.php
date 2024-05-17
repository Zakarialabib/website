<?php

declare(strict_types=1);

namespace App\Livewire\Front\Articles;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]
class Show extends Component
{
    use WithPagination;

    public Article $article;

    public function mount(Article $article): void
    {
        $this->article = $article;
    }

    public function render()
    {
        Auth::user();

        // views($this->article)->record();

        // /** @var Article $article */
        $article = Cache::remember('post-'.$this->article->id, now()->addHour(), fn (): \App\Models\Article => $this->article);

        return view('livewire.front.articles.show', [
            'article' => $article->loadCount('views'),
        ]);
    }
}
