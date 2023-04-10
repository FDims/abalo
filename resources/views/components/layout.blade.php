<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('/js/cookiecheck.js') }}" defer></script>

    <title>{{ $title ?? 'Abalo' }}</title>
</head>
<body>
    {{ $slot }}

    <div id="cookie-banner">
        <p>This website uses cookies.</p>
        <button id="accept-cookie-button">I accept</button>
        <button id="refuse-cookie-button">I refuse</button>
    </div>
</body>
</html>
