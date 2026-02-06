<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Hybrid Layout</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Inter, Arial, sans-serif;
            overflow: hidden;
        }

        #bgImg {
            inset: 0;
            background-size: cover;
            background-position: center;
            z-index: 1;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            padding: 0 0 0 80px;
        }

        .bg-actions {
            display: flex;
            gap: 10px;
        }

        .bg-actions button {
            background: #000;
            color: #fff;
            padding: 10px 16px;
            border: none;
            cursor: pointer;
        }

        /* =====================
   MAIN UI LAYER
===================== */
        .main {
            position: relative;
            z-index: 5;
            width: 100%;
            height: 100vh;
            display: flex;
        }

        .newnav {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding-bottom: 100px;
            gap: 10px;
        }

        /* NAVBAR */
        .navbar {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .navbar li {
            list-style: none;
            font-size: 28px;
            margin: 1px 0;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.7);
            padding: 10px 24px;
        }

        /* CONTENT BAR */
        .contentbar {
            width: 50%;
            height: 100%;
            position: absolute;
            right: -100%;
            top: 0;
            background: rgb(255 192 0);
            padding-right: 10%;
            transition: right 0.6s ease;
            display: block;
        }

        .contentbar.active {
            right: 0;
        }

        .content {
            overflow-y: auto;
            max-height: 100%;
            padding: 40px 10px;
        }

        .content::-webkit-scrollbar {
            display: none;
        }

        /* CONTENT */
        .content-section {
            display: none;
            animation: fadeIn .4s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* CLOSE */
        .closeContent {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 8px 14px;
            border: none;
            font-size: 18px;
            background: #000;
            color: #fff;
            cursor: pointer;
        }

        .abslute-cls {
            position: absolute;
            right: 0;
            top: 0;
            transition: right 1s ease;
            animation: fadeout .4s ease forwards;
            opacity: 0.3;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* FOOTER */
        .footer {
            width: 80%;
            display: flex;
            justify-content: space-between;
            position: absolute;
            bottom: 0;
            background: #2b2b2b;
            color: #ccc;
            text-align: center;
            padding: 10px 20px;
            font-size: 14px;
        }

        .social-list,
        .copyright {
            display: flex;
            padding: 0 20px;
        }

        .social-list i {
            color: #ffc000;
        }

        @media (max-width: 600px) {
            .main {
                justify-content: center;
            }

            #bgImg {
                padding: 0;
            }

            .newnav {
                width:80%;
            }

            /* MOBILE CONTENT BAR */
            .contentbar {
                display: block;
                position: fixed;
                width: 100%;
                height: 100vh;
                left: 0;
                bottom: -150%;
                right: auto;
                top: auto;
                padding-right: 0;
                z-index: 999;
                transition: bottom 0.5s ease;
            }

            .contentbar.active {
                bottom: 0;
            }

            .content {
                padding: 70px 20px 80px;
            }

            .closeContent {
                top: 70px;
                right: 15px;
                z-index: 1000;
            }

            .footer {
                width: 100%;
                padding:10px;
            }

            .social-list,
            .copyright {
                padding: 0;
            }
}
    </style>
</head>

<body>

    <!-- BACKGROUND -->
    <div id="bgImg">
        <!-- MAIN UI -->
        <div class="main">

            <div class="newnav">
                <!-- NAVBAR -->
                <?php include('includes/navbar.php'); ?>
                <div class="bg-actions" id="action">
                    <div>
                        <button id="leftbtn"><i class="fa-solid fa-chevron-left"></i></button>
                    <button id="rightbtn"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>

            <!-- CONTENT BAR -->
            <div class="contentbar" id="contentbar">
                <img src="https://quanticalabs.com/Nostalgia/Template/image/icon/icon-content/content_icon_features_right.png"
                    class="abslute-cls" alt="">

                <button class="closeContent" id="closeContent"><i class="fa-solid fa-xmark"></i></button>


                <div class="content">
                    <div id="about" class="content-section">
                        <?php include('includes/about.php'); ?>
                    </div>

                    <div id="contact" class="content-section">
                        <?php include('includes/contact.php'); ?>
                    </div>

                    <div id="kundalini" class="content-section">
                        <?php include('includes/kundalini.php'); ?>
                    </div>

                    <div id="multistyle" class="content-section">
                        <?php include('includes/multistyle.php'); ?>
                    </div>

                    <div id="hatha" class="content-section">
                        <?php include('includes/hatha.php'); ?>
                    </div>
                </div>

                <!-- FOOTER -->
                <footer class="footer">
                    <div class="social-list">
                        <a class="social-list-facebook" href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a class="social-list-twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a class="social-list-google" href="#"><i class="fa-brands fa-google"></i></a>
                    </div>
                    <div class="copyright">
                        <p>© 2026 HybridYTTc.Yoga</p>
                        <p>• All Rights Reserved</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script>
        /* =====================
           BACKGROUND SLIDER
        ===================== */
        const bgImg = document.getElementById("bgImg");
        const leftBtn = document.getElementById("leftbtn");
        const rightBtn = document.getElementById("rightbtn");
        const actions = document.getElementById("actions");

        const images = [
            "xajf62.webp",
            "images.jpg",
            "images (1).jpg"
        ];

        let index = 0;
        bgImg.style.backgroundImage = `url(images/${images[index]})`;

        leftBtn.addEventListener("click", () => {
            index = (index - 1 + images.length) % images.length;
            bgImg.style.backgroundImage = `url(images/${images[index]})`;
        });

        rightBtn.addEventListener("click", () => {
            index = (index + 1) % images.length;
            bgImg.style.backgroundImage = `url(images/${images[index]})`;
        });

        /* =====================
           CONTENT PANEL
        ===================== */
        const menuItems = document.querySelectorAll(".navbar li");
        const sections = document.querySelectorAll(".content-section");
        const contentBar = document.getElementById("contentbar");
        const closeContent = document.getElementById("closeContent");

        menuItems.forEach(item => {
            item.addEventListener("click", () => {
                sections.forEach(s => s.style.display = "none");

                const target = document.getElementById(item.dataset.target);
                if (target) {
                    target.style.display = "block";
                }

                contentBar.classList.add("active");
                actions.style.display = "none";
            });
        });

        closeContent.addEventListener("click", () => {
            contentBar.classList.remove("active");
            sections.forEach(s => s.style.display = "none");
            actions.style.display = "flex";
        });
    </script>

</body>

</html>