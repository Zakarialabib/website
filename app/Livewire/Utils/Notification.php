<?php

declare(strict_types=1);

namespace App\Livewire\Utils;

use Livewire\Component;

class Notification extends Component
{
    public $notifications = [];

    public function mount(): void
    {
        $this->notifications = auth()->user()->unreadNotifications;
    }

    public function markAsRead($notificationId): void
    {
        $notification = auth()->user()->notifications->where('id', $notificationId)->first();

        if ($notification) {
            $notification->markAsRead();
            $this->notifications = collect($this->notifications)->reject(static function ($item) use ($notificationId): bool {
                return $item->id === $notificationId;
            })->all();
        }
    }

    public function render()
    {
        return view('livewire.utils.notification');
    }
}
