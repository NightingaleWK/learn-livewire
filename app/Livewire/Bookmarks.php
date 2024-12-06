<?php

namespace App\Livewire;

use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Bookmarks extends Component
{
    #[Validate('required')]
    public string $name = '';

    #[Validate('required|url')]
    public string $url = '';

    public function submit()
    {
        $this->validate();

        $bookmark = Auth::user()->bookmarks()->create([
            'name' => $this->name,
            'url' => $this->url,
        ]);

        $this->reset();

        session()->flash('success', "Bookmark '{$bookmark->name}' hasbeen saved.");
    }

    public function delete(Bookmark $bookmark)
    {
        $this->authorize('delete', $bookmark);

        sleep(2);

        $bookmark->delete();
    }

    public  function mount()
    {
        Auth::loginUsingId(2);
    }
    public function render()
    {
        return view('livewire.bookmarks', [
            'bookmarks' => Bookmark::all()
        ]);
    }
}
