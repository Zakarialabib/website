<?php

declare(strict_types=1);

namespace App\Livewire\Front\Articles;

use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use App\Traits\WithArticleAttributes;
use App\Traits\WithTagsAssociation;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.front')]
final class Edit extends Component
{
    use WithArticleAttributes;
    use WithFileUploads;
    use WithTagsAssociation;

    public Article $article;

    public ?string $preview = null;

    public bool $alreadySubmitted = false;

    /** @var string[] */
    protected $listeners = ['markdown-x:update' => 'onMarkdownUpdate'];

    public function mount(Article $article): void
    {
        $this->article = $article;
        $this->title = $this->article['title'];
        $this->body = $this->article['body'];
        $this->slug = $this->article['slug'];
        $this->show_toc = $this->article['show_toc'];
        $this->canonical_url = $this->article->originalUrl();
        $this->preview = $this->article->getFirstMediaUrl('media');
        $this->associateTags = old('tags', $this->article->tags()->pluck('id')->toArray());
        $this->tags_selected = $this->associateTags;
    }

    public function submit(): void
    {
        $this->alreadySubmitted = $this->article->submitted_at instanceof \Carbon\Carbon;
        // $this->submitted_at = $this->article->submitted_at ?? now();
        $this->store();
    }

    public function store(): void
    {
        $this->save();
    }

    public function save(): void
    {
        $this->validate();

        $this->article->update([
            'title'         => $this->title,
            'slug'          => $this->slug,
            'body'          => $this->body,
            'show_toc'      => $this->show_toc,
            'canonical_url' => $this->canonical_url,
        ]);

        $this->article->syncTags($this->associateTags);

        if ($this->file) {
            $this->article->addMedia($this->file->getRealPath())->toMediaCollection('media');
        }

        Cache::forget('post-'.$this->article->id);

        // $user->hasRole('user') ?
        //     $this->redirectRoute('dashboard') :
        //     $this->redirectRoute('articles.show', $this->article);
    }

    public function render(): View
    {
        return view('livewire.front.articles.edit', [
            'tags' => Tag::whereJsonContains('concerns', ['post'])->get(),
        ]);
    }
}
