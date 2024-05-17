<?php

declare(strict_types=1);

namespace App\Livewire\Front\Articles;

use App\Events\ArticleWasSubmittedForApproval;
use App\Gamify\Points\PostCreated;
use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use App\Traits\WithArticleAttributes;
use App\Traits\WithTagsAssociation;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.front')]
final class Create extends Component
{
    use WithArticleAttributes;
    use WithFileUploads;
    use WithTagsAssociation;

    public function submit(): void
    {
        $this->store();
    }

    public function store(): void
    {
        $this->validate();

        /** @var Article $article */
        $article = Article::create([
            'title'         => $this->title,
            'slug'          => $this->slug,
            'body'          => $this->body,
            'show_toc'      => $this->show_toc,
            'canonical_url' => $this->canonical_url,
        ]);

        if (collect($this->associateTags)->isNotEmpty()) {
            $article->syncTags(tags: $this->associateTags);
        }

        if ($this->file) {
            $article->addMedia($this->file->getRealPath())->toMediaCollection('media');
        }

        $user->hasRole('user') ?
            $this->redirectRoute('dashboard') :
            $this->redirectRoute('articles.show', $article);
    }

    public function render(): View
    {
        return view('livewire.front.articles.create', [
            'tags' => Tag::whereJsonContains('concerns', ['post'])->get(),
        ]);
    }
}
