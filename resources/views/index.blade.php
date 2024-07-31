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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="app">
        <div class="background"></div>
        <div class="container text-center">
            <div class="col-sm-12">
                <h1 class="py-4"><b>Birdsong</b></h1>
            </div>
            <div class="container text-center pb-5">
                <button id="playPauseButton" class="btn btn-primary">Play</button>
            </div>
            <div class="d-flex justify-content-center flex-column align-items-center pb-5">
                <h3>Wood Pigeon</h3>
                <slider :value="50" :min="0" :max="100" audio-src="/storage/sounds/XC825469 - Common Wood Pigeon.mp3">
                </slider>
                <h3>Chiffchaff</h3>
                <slider :value="50" :min="0" :max="100" audio-src="/storage/sounds/XC862633 - Common Chiffchaff.mp3">
                </slider>
                <h3>Robin</h3>
                <slider :value="50" :min="0" :max="100" audio-src="/storage/sounds/XC872024 - European Robin.mp3">
                </slider>
                <h3>Blackbird</h3>
                <slider :value="50" :min="0" :max="100" audio-src="/storage/sounds/XC877442 - Common Blackbird.mp3">
                </slider>
                </slider>
                <h3>House Sparrow</h3>
                <slider :value="50" :min="0" :max="100" audio-src="/storage/sounds/XC811634 - House Sparrow.mp3">
                </slider>
                <h3>Goldfinch</h3>
                <slider :value="50" :min="0" :max="100" audio-src="/storage/sounds/XC915436 - European Goldfinch.mp3">
                </slider>
                <h3>Blue Tit</h3>
                <slider :value="50" :min="0" :max="100" audio-src="/storage/sounds/XC613800 - Eurasian Blue Tit.mp3">
                </slider>
            </div>
        </div>
        <div class="bg-body text-center rounded-top-5">
            <div class="container" style="width:25%">
                <h2 class="pt-5 pb-4">About</h2>
                <p class="lead">I used to listen to a radio station that played the perfect UK birdsong sounds. When
                    that
                    radio
                    disappeared,
                    I had a hard time finding just the right sound. I wanted to create a tool where you can customise
                    your
                    own
                    sound to get the perfect fit.<br><br>
                    Have fun creating the right dawn chorus for you!<br>
                    This is just a personal project born from an idea I had, feel free to suggest any changes or give
                    any
                    feedback!</p><br>
                <p>All audio from <a target="_blank" href="https://xeno-canto.org/">xeno-canto.org</a></p>
            </div>
            <div>
                <button class="btn btn-primary my-4">Contact</button>
            </div>
            @include('footer')
        </div>
    </div>
</body>
<script>
    var isToggled = false;

    function playAllAudio() {
        var audioElements = document.querySelectorAll('audio');
        audioElements.forEach(function (audio) {
            audio.play();
        });
    }

    function pauseAllAudio() {
        var audioElements = document.querySelectorAll('audio');
        audioElements.forEach(function (audio) {
            audio.pause();
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        var toggleButton = document.getElementById('playPauseButton');

        toggleButton.addEventListener('click', function () {
            this.classList.toggle('active');
            if (!isToggled) {
                isToggled = !isToggled;
                toggleButton.textContent = "Pause";
                playAllAudio();
            }
            else {
                isToggled = !isToggled;
                toggleButton.textContent = "Play";
                pauseAllAudio();
            }
        });
    });
</script>

</html>