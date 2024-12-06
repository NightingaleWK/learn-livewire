<?php

namespace App\Livewire;

use Livewire\Component;

class SendEvent extends Component
{
    public string $message;
    public function sendMessage()
    {
        $this->dispatch('messageSend', $this->message);

        $this->reset();
    }

    public function resetMessage()
    {
        $this->dispatch('messageReset');
    }

    public function render()
    {
        return view('livewire.send-event');
    }
}
