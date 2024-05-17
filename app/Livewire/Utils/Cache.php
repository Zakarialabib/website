<?php

declare(strict_types=1);

namespace App\Livewire\Utils;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Cache extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.utils.cache');
    }

    public function onClearCache(): void
    {
        Artisan::call('optimize:clear');
        Artisan::call('view:clear');

        $this->alert('success', __('All caches have been cleared!'));
    }
}
