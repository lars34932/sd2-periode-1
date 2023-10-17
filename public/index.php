<?php 
    include("../source/views/tiles.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/6c294d23a1.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <a class="header__logo" href="index.php">
            <img class="header__img" src="img/NVVN.png" alt="">
        </a> 
        <a class="header__link" href="">
            <svg class="header__icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 192 512"><style>svg{fill:#278fd1}</style><path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"/></svg>
            <p class="icon__text">info</p>
        </a>
        <a class="header__link" href="">
            <svg class="header__icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#278fd1}</style><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
            <p class="icon__text">speel</p>
        </a>
        <a class="header__link" href="">
            <div class="icon__div">
                <div class="card card1"></div>
                <div class="card card2"></div>
            </div>
            <p class="icon__text">sdg's</p>
        </a>
    </header>
    <main>
        <section class="tile__section">
            <?php
                makeTiles();
            ?>
        </section>
        <section class="cta__section">
            
        </section>
    </main>
</body>
</html>