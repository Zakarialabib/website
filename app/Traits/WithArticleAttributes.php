<?php

declare(strict_types=1);

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;

trait WithArticleAttributes
{
    #[Rule('required', message: 'The title field is required.')]
    #[Rule('max:150', message: 'The title may not be greater than 150 characters.')]
    public ?string $title = null;

    public ?string $slug = null;

    #[Rule('required', message: 'The body field is required.')]
    public string $body = '';

    public ?string $canonical_url = null;

    public bool $show_toc = false;

    public int $reading_time = 1;

    //@phpstan-ignore-next-line
    public $file;

    /** @var array|string[] */
    protected array $rules = [
        'tags_selected' => 'nullable|array',
        'canonical_url' => 'nullable|url',
        'file'          => 'nullable|image|max:2048', // 1MB Max
    ];

    public function removeImage(): void
    {
        $this->file = null;
    }

    /** @return array<string, string> */
    public function messages(): array
    {
        return [
            'file.required' => __('L\'image de couverture est requise (dans les paramètres avancées)'),
        ];
    }

    public function updatedTitle(string $value): void
    {
        $this->slug = Str::slug($value);
    }

    #[On('onMarkdownUpdate')]
    public function onMarkdownUpdate(string $content): void
    {
        $this->body = $content;
        $this->reading_time = Str::readDuration($content);
    }
}
