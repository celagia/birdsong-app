<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Birdsong</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="app">
    <div class="background"></div>
    <div class="container text-center">
        <div class="col-sm-12">
            <h1 class="py-4"><b>Birdsong</b></h1>
        </div>
        <h2 class="pt-2">Sounds</h2>
        <p>TODO - Show sliders to control volume of different layers of birdsong</p>
        <div class="pb-3">Slider Image</div>
        <div class="pb-3">Slider o---------------o</div>
        <div class="pb-3">Slider Image</div>
        <div class="pb-3">Slider o---------------o</div>
        <div class="pb-3">Slider Image</div>
        <div class="pb-3">Slider o---------------o</div>
        <div class="pb-3">Slider Image</div>
        <div class="pb-3">Slider o---------------o</div>
        <div class="pb-3">Slider Image</div>
        <div class="pb-3">Slider o---------------o</div>
    </div>
    <div class="bg-body text-center rounded-top-5">
        <div class="container">
            <h2 class="py-4">About</h2>
            <p class="lead">I used to listen to a radio station that played the perfect UK birdsong sounds. When that
                radio
                disappeared,
                I had a hard time finding just the right sound. I wanted to create a tool where you can customise your
                own
                sound to get the perfect fit.</p>
        </div>
        <div>
            <button class="btn btn-primary my-4">Contact</button>
        </div>
            @include('footer')
        </div>
    </div>
</body>

</html>