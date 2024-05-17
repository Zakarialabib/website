<?php

declare(strict_types=1);

namespace App\Livewire\Utils;

use Livewire\Component;

class ColorPicker extends Component
{
    public $colors;

    public $method;

    public $colorProperty;

    // Property to be updated (e.g., 'bg_color', 'text_color')
    public $colorOptions = [100, 200, 300, 400, 500, 600, 700, 800, 900];

    public $title = 'Select a Color';

    public $selectedColor = 'blue';

    public function mount(): void
    {
        $this->colors = ['gray', 'red', 'green', 'blue', 'indigo'];
    }

    public function selectColor($color): void
    {
        $this->colorProperty = $color;
        $this->dispatch('colorSelected', [$this->colorProperty, $color]);
    }

    public function render()
    {
        return view('livewire.utils.color-picker');
    }
}
