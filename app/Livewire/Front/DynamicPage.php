<?php

declare(strict_types=1);

namespace App\Livewire\Front;

use App\Enums\PageType;
use App\Models\Page;
use Livewire\Component;
use App\Traits\LazySpinner;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Livewire\Utils\WithModels;
use App\Models\Article;

#[Layout('layouts.front')]
class DynamicPage extends Component
{
    use LazySpinner;
    use WithModels;

    public Page $page;

    public $section;

    public string $description;

    public $type;

    public $tag;

    public $settings;

    public $pageType;

    public $item_id;

    public $layout_config;

    public function mount(?string $slug = 'home'): void
    {
        $this->page = Page::where('slug', $slug)->firstOrFail();
        $this->type = $this->page->type;
        $this->description = $this->page->description;

        if (is_string($this->page->settings)) {
            $this->settings = json_decode((string) $this->page->settings, true);
        } elseif (is_array($this->page->settings)) {
            $this->settings = $this->page->settings;
        }

    }

    public function selectedTag($tag): void
    {
        $this->tag = $tag;
    }

    #[Computed]
    public function latestArticles()
    {
        return Article::with(['tags', 'user'])
            ->orderByDesc('created_at')
            ->limit(4)
            ->get();
    }

    #[Computed]
    public function aboutSection()
    {
        return $this->getSectionByType(PageType::ABOUT);
    }

    #[Computed]
    public function contactSection()
    {
        return $this->getSectionByType(PageType::CONTACT);
    }

    public function render()
    {
        return view('livewire.front.dynamic-page')->title($this->page->title);
    }
}
