<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="typography.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="footer.css">
    <title>Document</title>
</head>

<body>
    <header>
        <a class="goToStart" href="#start">
            <h1>Fake News.</h1>
        </a>
        <nav class="navDesk">
            <ul>
                <li>
                    <a href="#nyheter">Nyheter</a>
                </li>
                <li>
                    <a href="#kultur">Kultur</a>
                </li>
                <li>
                    <a href="#ekonomi">Ekonomi</a>
                </li>
                <li>
                    <a href="#sport">Sport</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="dateOfDay"><?php echo date("l jS \of F Y")  ?> </div>
    <main class="wrapper">
        <aside class="rightColumn">
            <section class="card popNews">
                <!--<div class="di_all_live__header-pulse-on">
                    <span class="pulse-dot"></span>
                    <div class="pulse-ring"></div>
                    <div class="pulse-ring"></div>
                    <div class="pulse-ring"></div>
                </div>-->
                <!--<div class="ring"></div>-->
                <h3>Populära nyheter</h3>
                <div class="popNewsItems">Fake news</div>
                <div class="popNewsItems">Fake news</div>
                <div class="popNewsItems">Fake news</div>
            </section>
            <section class="card follow">
                <h3>Follow Us</h3>
                <p>Some text..</p>
            </section>
        </aside>
        <section class="articles leftColumn">
            <article>
                <h2>TITLE HEADING</h2>
                <h5>Title description, Month Day, Year</h5>
                <div class="fakeImg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc.o</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc.o</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc.o</p>
            </article>
            <article>
                <h2>TITLE HEADING</h2>
                <h5>Title description, Month Day, Year</h5>
                <div class="fakeImg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </article>
            </div>
        </section>
    </main>
    <footer>
        <h2>Fake News.</h2>
        <button class="hamburger">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                    <path d="M20 40C16.0444 40 12.1776 38.827 8.88857 36.6294C5.59959 34.4317 3.03614 31.3082 1.52239 27.6536C0.0086351 23.9991 -0.387432 19.9778 0.384273 16.0982C1.15598 12.2186 3.06079 8.65489 5.85784 5.85784C8.65489 3.06079 12.2186 1.15598 16.0982 0.384273C19.9778 -0.387432 23.9991 0.0086351 27.6536 1.52239C31.3082 3.03614 34.4317 5.59959 36.6294 8.88857C38.827 12.1776 40 16.0444 40 20C39.9942 25.3025 37.8852 30.3862 34.1357 34.1357C30.3862 37.8852 25.3025 39.9942 20 40ZM20 1.24998C16.2916 1.24998 12.6665 2.34965 9.58304 4.40992C6.49962 6.4702 4.09638 9.39855 2.67724 12.8247C1.25809 16.2508 0.886781 20.0208 1.61025 23.6579C2.33373 27.2951 4.11949 30.636 6.74173 33.2582C9.36396 35.8805 12.7049 37.6662 16.342 38.3897C19.9792 39.1132 23.7492 38.7419 27.1753 37.3227C30.6014 35.9036 33.5298 33.5003 35.59 30.4169C37.6503 27.3335 38.75 23.7084 38.75 20C38.7442 15.0289 36.7669 10.2632 33.2518 6.74812C29.7368 3.23307 24.971 1.25577 20 1.24998Z" fill="white" />
                    <path d="M29.6875 13.75H10.3125C10.1467 13.75 9.98777 13.6842 9.87056 13.5669C9.75335 13.4497 9.6875 13.2908 9.6875 13.125C9.6875 12.9592 9.75335 12.8003 9.87056 12.6831C9.98777 12.5658 10.1467 12.5 10.3125 12.5H29.6875C29.8533 12.5 30.0122 12.5658 30.1294 12.6831C30.2467 12.8003 30.3125 12.9592 30.3125 13.125C30.3125 13.2908 30.2467 13.4497 30.1294 13.5669C30.0122 13.6842 29.8533 13.75 29.6875 13.75Z" fill="white" />
                    <path d="M29.6875 20.625H10.3125C10.1467 20.625 9.98777 20.5592 9.87056 20.4419C9.75335 20.3247 9.6875 20.1658 9.6875 20C9.6875 19.8342 9.75335 19.6753 9.87056 19.5581C9.98777 19.4408 10.1467 19.375 10.3125 19.375H29.6875C29.8533 19.375 30.0122 19.4408 30.1294 19.5581C30.2467 19.6753 30.3125 19.8342 30.3125 20C30.3125 20.1658 30.2467 20.3247 30.1294 20.4419C30.0122 20.5592 29.8533 20.625 29.6875 20.625Z" fill="white" />
                    <path d="M29.6875 27.5H10.3125C10.1467 27.5 9.98777 27.4342 9.87056 27.3169C9.75335 27.1997 9.6875 27.0408 9.6875 26.875C9.6875 26.7092 9.75335 26.5503 9.87056 26.4331C9.98777 26.3158 10.1467 26.25 10.3125 26.25H29.6875C29.8533 26.25 30.0122 26.3158 30.1294 26.4331C30.2467 26.5503 30.3125 26.7092 30.3125 26.875C30.3125 27.0408 30.2467 27.1997 30.1294 27.3169C30.0122 27.4342 29.8533 27.5 29.6875 27.5Z" fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0">
                        <rect width="40" height="40" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </button>
        <nav class="navMobil">
            <ul>
                <li>
                    <a href="#start">Start</a>
                </li>
                <li>
                    <a href="#kultur">Kultur</a>
                </li>
                <li>
                    <a href="#ekonomi">Ekonomi</a>
                </li>
                <li>
                    <a href="#sport">Sport</a>
                </li>
            </ul>
        </nav>
    </footer>
</body>

</html>