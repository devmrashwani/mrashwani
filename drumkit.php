<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JS Drum Kit</title>
    <link rel="stylesheet" href="./Drum_Kit/style.css">
</head>

<body>


    <div class="keys">
        <div data-key="65" class="key" id="65">
            <kbd>A</kbd>
            <span class="sound">clap</span>
        </div>
        <div data-key="83" class="key" id="83">
            <kbd>S</kbd>
            <span class="sound">hihat</span>
        </div>
        <div data-key="68" class="key" id="68">
            <kbd>D</kbd>
            <span class="sound">kick</span>
        </div>
        <div data-key="70" class="key" id="70">
            <kbd>F</kbd>
            <span class="sound">openhat</span>
        </div>
        <div data-key="71" class="key" id="71">
            <kbd>G</kbd>
            <span class="sound">boom</span>
        </div>
        <div data-key="72" class="key" id="72">
            <kbd>H</kbd>
            <span class="sound">ride</span>
        </div>
        <div data-key="74" class="key" id="74">
            <kbd>J</kbd>
            <span class="sound">snare</span>
        </div>
        <div data-key="75" class="key" id="75">
            <kbd>K</kbd>
            <span class="sound">tom</span>
        </div>
        <div data-key="76" class="key" id="76">
            <kbd>L</kbd>
            <span class="sound">tink</span>
        </div>
    </div>

    <audio data-key="65" src="./Drum_Kit/sounds/clap.wav"></audio>
    <audio data-key="83" src="./Drum_Kit/sounds/hihat.wav"></audio>
    <audio data-key="68" src="./Drum_Kit/sounds/kick.wav"></audio>
    <audio data-key="70" src="./Drum_Kit/sounds/openhat.wav"></audio>
    <audio data-key="71" src="./Drum_Kit/sounds/boom.wav"></audio>
    <audio data-key="72" src="./Drum_Kit/sounds/ride.wav"></audio>
    <audio data-key="74" src="./Drum_Kit/sounds/snare.wav"></audio>
    <audio data-key="75" src="./Drum_Kit/sounds/tom.wav"></audio>
    <audio data-key="76" src="./Drum_Kit/sounds/tink.wav"></audio>

<script src="./Drum_Kit/drum.js"></script>
</body>

</html>