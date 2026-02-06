<div class="navdiv">

    <div class="nav" id="nav">

        <ul class="navbar" id="navList">
            <li data-target="about">About</li>
            <!-- <li data-target="portfolio">Portfolio</li> -->
            <li data-target="contact">Contact</li>
            <li data-target="kundalini">Kundalini</li>
            <li data-target="multistyle">Multistyle</li>
            <li data-target="hatha">Hatha</li>
        </ul>

        <div class="nav-controls">
            <button id="scrollUp"><i class="fa-solid fa-chevron-up"></i></button>
            <button id="scrollDown"><i class="fa-solid fa-chevron-down"></i></button>
            <?php include('music.php'); ?>
            <button id="closeNav"><i class="fa-solid fa-xmark"></i></button>
        </div>

    </div>

    <button id="navBtn">Hybrid ttc</button>
</div>

<style>
    .navdiv {
        display: flex;
        flex-direction: column;
        gap: 20px;
        justify-content: center;
        align-items: flex-start;
    }

    /* OPEN BUTTON */
    #navBtn {
        height: 150px;
        width: 100%;
        font-size: 3.5rem;
        background: #ffc000;
        color: #fff;
        border: none;
        padding: 10px;
        text-transform: uppercase;
        font-family: fantasy;
        cursor: pointer;
    }

    /* NAV CONTAINER */
    .nav {
        visibility: hidden;
        opacity: 0;
        width: 100%;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .nav.show {
        visibility: visible;
        opacity: 1;
    }

    /* LIST */
    .nav ul {
        align-items: flex-start;
        list-style: none;
        max-height: 250px;
        overflow-y: auto;
        width: 100%;
        scrollbar-width: none;
    }

    .nav ul::-webkit-scrollbar {
        display: none;
    }

    .nav li {
        background: #000;
        padding: 6px 0px;
        /* font-size: 30px; */
        cursor: pointer;
        color: #fff;
        text-transform: uppercase;
        font-family: fangsong;
    }

    /* CONTROLS */
    .nav-controls {
        display: flex;
        gap: 10px;
        width: 50%;
        margin-top: 10px;
        justify-content: space-between;
    }

    .nav-controls button {
        width: 30px;
        height: 30px;
        font-size: 18px;
        background: #000;
        color: #fff;
    }
    
    @media(max-width: 768px) {
        
    }
</style>

<script>
    const openNav = document.getElementById('navBtn');
    const closeNav = document.getElementById('closeNav');
    const scrollUp = document.getElementById('scrollUp');
    const scrollDown = document.getElementById('scrollDown');
    const nav = document.getElementById('nav');
    const navList = document.getElementById('navList');

    /* OPEN / CLOSE */
    
    openNav.addEventListener('click', () => {
        if(nav.classList.contains('show')){
            nav.classList.remove('show');
        } else {
            nav.classList.add('show');
        };
  });

    closeNav.addEventListener('click', () => {
        nav.classList.remove('show');
    });

    /* SCROLL CONTROLS */
    scrollUp.addEventListener('click', () => {
        navList.scrollBy({ top: -100, behavior: 'smooth' });
    });

    scrollDown.addEventListener('click', () => {
        navList.scrollBy({ top: 100, behavior: 'smooth' });
    });
</script>