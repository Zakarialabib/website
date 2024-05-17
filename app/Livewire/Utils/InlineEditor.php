<?php

declare(strict_types=1);

namespace App\Livewire\Utils;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Modelable;

class InlineEditor extends Component
{
    use LivewireAlert;
    public Model $model;

    #[Modelable]
    public $value = '';

    public $field = '';

    public $uniqueId;

    public bool $editing = false; // Add editing state

    public function startEditing(): void
    {
        $this->editing = true;
    }

    public function cancelEditing(): void
    {
        $this->editing = false;
    }

    public function mount(): void
    {
        $this->field = $this->model->getAttribute($this->value);

        $this->uniqueId = uniqid();
    }

    public function saveValue(): void
    {
        $this->model->setAttribute($this->field, $this->value)->save();
        $this->editing = false;

        $this->alert('success', __('Status Changed successfully!'), [
            'position'       => 'center',
            'timer'          => 3000,
            'toast'          => true,
            'text'           => '',
            'showDenyButton' => false,
            'onDenied'       => '',
        ]);
    }

    public function render()
    {
        return view('livewire.utils.inline-editor');
    }
}
