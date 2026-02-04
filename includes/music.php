<!-- Music Icon -->
    <div id="musicBtn" class="music-icon" aria-label="Toggle music">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Audio -->
    <audio id="audio" src="images/spiderman_nwh.mp32" loop></audio>

    <style>

/* Music icon (Nostalgia style) */
.music-icon {
    width: 30px;
    height: 30px;
    background: #000;
    display: flex;
    justify-content:space-between;
    align-items: flex-end;
    gap: 4px;
    cursor: pointer;
    opacity: 0.85;
    z-index: 1000;
    padding:2px;
}

.music-icon span {
    width: 5px;
    height: 7px;
    background: #fff;
    animation: equalizer 1s infinite ease-in-out;
    animation-play-state: paused;
}

/* Stagger animation for organic feel */
.music-icon span:nth-child(1) { animation-delay: 0s; }
.music-icon span:nth-child(2) { animation-delay: .2s; }
.music-icon span:nth-child(3) { animation-delay: .4s; }

.music-icon.playing span {
    animation-play-state: running;
}

.music-icon:hover {
    opacity: 1;
}

@keyframes equalizer {
    0%   { height: 4px; }
    50%  { height: 20px; }
    100% { height: 6px; }
}

/* Mobile tweak */
@media (max-width: 600px) {
    .music-icon {
        bottom: 20px;
        right: 20px;
    }
}

    </style>

    <script>
        const musicBtn = document.getElementById('musicBtn');
const audio = document.getElementById('audio');

let hasInteracted = false;

/**
 * Unlock audio on first user interaction anywhere
 */
const unlockAudio = () => {
    if (hasInteracted) return;

    audio.play().then(() => {
        musicBtn.classList.add('playing');
        hasInteracted = true;
    }).catch(() => {
        // autoplay still blocked (very rare after click)
    });

    document.removeEventListener('click', unlockAudio);
};

document.addEventListener('click', unlockAudio);

/**
 * Toggle music from icon
 */
musicBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // prevent triggering unlock twice

    if (audio.paused) {
        audio.play();
        musicBtn.classList.add('playing');
    } else {
        audio.pause();
        musicBtn.classList.remove('playing');
    }
});

    </script>