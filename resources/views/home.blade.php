<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <style>
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
        }
    </style>
</head>

<body>
    <main>
        <h1 class="red">My Todo's</h1>
    </main>
</body>

</html>
