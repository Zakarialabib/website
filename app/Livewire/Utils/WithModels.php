<?php

declare(strict_types=1);

namespace App\Livewire\Utils;

use Livewire\Attributes\Computed;
use App\Models\{Activity, Package, Page, PageSetting, Partner, Section, Slider};

trait WithModels
{
    public $perPage = 4;

    #[Computed]
    public function packages()
    {
        return Package::active()
            ->take($this->perPage)
            ->get();
    }

    #[Computed]
    public function sliders()
    {
        return Slider::active()->take($this->perPage)->get();
    }

    #[Computed]
    public function partners()
    {
        return Partner::active()->take($this->perPage)->get();
    }

    public function getPageConfig($pageId)
    {
        return PageSetting::where('page_id', $pageId)->first();
    }

    public function getPackageConfig($packageId)
    {
        return PageSetting::where('package_id', $packageId)->first();
    }

    public function getPageTypeConfig($type)
    {
        return PageSetting::where('page_type', $type)->first();
    }

    public function getSectionByType($type)
    {
        return Section::where('type', $type)->active()->first();
    }
}
