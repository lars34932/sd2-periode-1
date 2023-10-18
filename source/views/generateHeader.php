<?php
function makeHeader() {
    echo '
        <header>
            <a class="header__logo" href="index.php">
                <img class="header__img" src="img/NVVN.png" alt="index.php">
            </a> 
            <a class="header__link" href="https://sdggame.nl/">
                <svg class="header__icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#278fd1}</style><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                <p class="icon__text">speel</p>
            </a>
            <a class="header__link" href="sdg.php">
                <div class="icon__div">
                    <div class="card card1"></div>
                    <div class="card card2"></div>
                </div>
                <p class="icon__text">sdgs</p>
            </a>
        </header>';
}