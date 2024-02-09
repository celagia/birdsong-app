<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Birdsong</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body id="app">
    <img id="banner" class="img-fluid" src="/storage/images/summerforest.jpg">
    <div class="container text-center">
        <h1 class="py-4">Birdsong</h1>
        <h2>About</h2>
        <p>I used to listen to a radio station that played the perfect UK birdsong sounds. When that radio disappeared,
            I had a hard time finding just the right sound. I wanted to create a tool where you can customise your own
            sound to get the perfect fit.</p>
        <h2>Sounds</h2>
        <p>TODO - Show sliders to control volume of different layers of birdsong</p>
        <div>
            <button class="btn btn-primary mb-4">Contact</button>
        </div>
    </div>
</body>

</html>