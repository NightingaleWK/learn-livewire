<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <nav>
        <a wire:navigate href="/bird">Bird</a>
        <a wire:navigate href="/counter">Counter</a>
        <a wire:navigate href="/lazy">Lazy</a>
        <a wire:navigate href="/bookmarks">bookmarks</a>
    </nav>
    {{ $slot }}
</body>

</html>
