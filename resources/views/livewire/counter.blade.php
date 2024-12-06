<div>
    <h1>count is : {{ $count }}</h1>

    <input type="number" wire:model.blur='number'>

    <button type="submit" wire:click='changeCount({{ $number }})'>Change Count</button>
</div>
