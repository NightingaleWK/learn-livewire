<?php

namespace App\Livewire;

use App\Models\Bird;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BirdForm extends Component
{
    #[Validate('required|numeric')]
    public int $birdCount;

    #[Validate('required')]
    public string $notes;

    public function submit()
    {
        $this->validate();

        Bird::create([
            'bird_count' => $this->birdCount,
            'notes' => $this->notes,
        ]);

        $this->reset();
    }

    public function delete(Bird $bird)
    {
        $bird->delete();
    }

    public function render()
    {
        return view('livewire.bird-form', [
            'birds' => Bird::all()
        ]);
    }
}
