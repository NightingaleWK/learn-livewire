<div>
    <h1>Bookmarks</h1>

    <hr>

    <div>User: {{ Auth::user()->name }} ID: {{ Auth::id() }}</div>
    <form wire:submit='submit'>
        <input type="text" wire:model='name'>
        <input type="text" wire:model='url'>
        <button type="submit">Save</button>
    </form>

    <hr>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
                <th>User</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookmarks as $bookmark)
                <tr wire:key="{{ $bookmark->id }}">
                    <td>✏️{{ $bookmark->name }}</td>
                    <td>🌍{{ $bookmark->url }}</td>
                    <td>😊{{ $bookmark->user->name }} ID: {{ $bookmark->user->id }}</td>
                    <td>
                        <button wire:click='delete({{ $bookmark }})' wire:confirm='Are you sure?'>x</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div wire:loading>Deleting ...</div>
</div>
