<?php

declare(strict_types=1);

namespace App\Livewire\Front;

use App\Mail\SubscribeMail;
use App\Models\Subscriber;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Component;

class NewslettersForm extends Component
{
    use LivewireAlert;
    
    public Subscriber $subscriber;

    #[Rule('required', message: 'Email is required.')]
    #[Rule('email', message: 'Email is invalid.')]
    public $email;

    public function render()
    {
        return view('livewire.front.newsletters-form');
    }

    public function store(): void
    {
        $this->validate();

        $subscriber = Subscriber::where('email', $this->email)->first();

        if ($subscriber) {
            $this->alert('error', __('Email already exists.'));

            return;
        }

        $subscriber = Subscriber::create([
            'email'  => $this->email,
            'name'   => $this->extractNameFromEmail($this->email),
            'tag'    => 'subscriber',
            'status' => true,
        ]);

        $this->alert('success', __('Your are subscribed to our newsletters.'));

        $this->reset('email');

        $user = User::find(1);
        $user_email = $user->email;
        Mail::to($user_email)->send(new SubscribeMail($subscriber));
    }

    private function extractNameFromEmail(string $email): string
    {
        $parts = explode('@', $email);
        $username = $parts[0];
        $nameParts = explode('.', $username);
        $name = implode(' ', $nameParts);

        return ucwords($name);
    }
}
