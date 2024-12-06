<div>
    <form wire:submit='submit'>
        <div>
            <label for="birdCount">Bird Count Number:</label>
            <input name="birdCount" type="number" wire:model='birdCount'>
            <div>
                @error('birdCount')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div>
            <label for="notes">Notes:</label>
            <textarea name="notes" wire:model='notes'></textarea>
            <div>
                @error('notes')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div>
            <button type="submit">Add a New Bird Count Entry</button>
        </div>
    </form>

    <table>
        <thead>
            <tr>
                <th>Bird Count</th>
                <th>Notes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($birds as $bird)
                <tr wire:key="{{ $bird->id }}">
                    <td>{{ $bird->bird_count }}</td>
                    <td>{{ $bird->notes }}</td>
                    <td>
                        <button wire:click='delete({{ $bird }})'>x</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
