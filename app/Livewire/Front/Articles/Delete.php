<?php

declare(strict_types=1);

namespace App\Livewire\Front\Articles;

use App\Models\Article;
use App\Policies\ArticlePolicy;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Delete extends Component
{
    use AuthorizesRequests;
    use LivewireAlert;

    public ?Article $article = null;

    public function mount(int $id): void
    {
        $this->article = Article::find($id);
    }

    public function delete(): void
    {
        // $this->authorize(ArticlePolicy::DELETE, $this->article);

        $this->article->delete(); // @phpstan-ignore-line

        $this->alert('success', __('La discussion a été supprimé avec tous ses commentaires.'));

        $this->redirect('articles.index');
    }

    public function render(): View
    {
        return view('livewire.front.articles.delete');
    }
}
