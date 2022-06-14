function removeTransition(e) {
    if (e.propertyName !== 'transform') return;
    e.target.classList.remove('playing');
}

function playSound(e) {
    const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
    const key = document.querySelector(`div[data-key="${e.keyCode}"]`);
    if (!audio) return;

    key.classList.add('playing');
    audio.currentTime = 0;
    audio.play();
}

const keys = Array.from(document.querySelectorAll('.key'));
keys.forEach(key => key.addEventListener('transitionend', removeTransition));
window.addEventListener('keydown', playSound);



const a = document.getElementById("65");
a.addEventListener('click', function() {
    const audio2 = document.querySelector(`audio[data-key="65"]`);
    const key2 = document.querySelector(`div[data-key="65"]`);
    if (!audio2) return;

    key2.classList.add('playing');
    audio2.currentTime = 0;
    audio2.play();
})
const s = document.getElementById("83");
s.addEventListener('click', function() {
    const audio3 = document.querySelector(`audio[data-key="83"]`);
    const key3 = document.querySelector(`div[data-key="83"]`);
    if (!audio3) return;

    key3.classList.add('playing');
    audio3.currentTime = 0;
    audio3.play();
})
const d = document.getElementById("68");
d.addEventListener('click', function() {
    const audio4 = document.querySelector(`audio[data-key="68"]`);
    const key4 = document.querySelector(`div[data-key="68"]`);
    if (!audio4) return;

    key4.classList.add('playing');
    audio4.currentTime = 0;
    audio4.play();
})
const f = document.getElementById("70");
f.addEventListener('click', function() {
    const audio5 = document.querySelector(`audio[data-key="70"]`);
    const key5 = document.querySelector(`div[data-key="70"]`);
    if (!audio5) return;

    key5.classList.add('playing');
    audio5.currentTime = 0;
    audio5.play();
})
const g = document.getElementById("71");
g.addEventListener('click', function() {
    const audio6 = document.querySelector(`audio[data-key="71"]`);
    const key6 = document.querySelector(`div[data-key="71"]`);
    if (!audio6) return;

    key6.classList.add('playing');
    audio6.currentTime = 0;
    audio6.play();
})
const h = document.getElementById("72");
h.addEventListener('click', function() {
    const audio7 = document.querySelector(`audio[data-key="72"]`);
    const key7 = document.querySelector(`div[data-key="72"]`);
    if (!audio7) return;

    key7.classList.add('playing');
    audio7.currentTime = 0;
    audio7.play();
})
const j = document.getElementById("74");
j.addEventListener('click', function() {
    const audio8 = document.querySelector(`audio[data-key="74"]`);
    const key8 = document.querySelector(`div[data-key="74"]`);
    if (!audio8) return;

    key8.classList.add('playing');
    audio8.currentTime = 0;
    audio8.play();
})
const k = document.getElementById("75");
k.addEventListener('click', function() {
    const audio9 = document.querySelector(`audio[data-key="75"]`);
    const key9 = document.querySelector(`div[data-key="75"]`);
    if (!audio9) return;

    key9.classList.add('playing');
    audio9.currentTime = 0;
    audio9.play();
})
const l = document.getElementById("76");
l.addEventListener('click', function() {
    const audio10 = document.querySelector(`audio[data-key="76"]`);
    const key10 = document.querySelector(`div[data-key="76"]`);
    if (!audio10) return;

    key10.classList.add('playing');
    audio10.currentTime = 0;
    audio10.play();
})