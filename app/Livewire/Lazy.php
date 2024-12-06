<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy as AttributesLazy;
use Livewire\Component;

// #[AttributesLazy()]
class Lazy extends Component
{
    public function mount()
    {
        sleep(3);
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            It's Loading...
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.lazy');
    }
}
