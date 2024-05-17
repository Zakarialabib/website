<?php

declare(strict_types=1);

namespace App\Livewire\Front;

use App\Models\Section;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class Index extends Component
{
    #[Computed]
    public function sections()
    {
        return Section::active()->take(1)->get();
    }

    public function render()
    {
        return view('livewire.front.index');
    }
}
