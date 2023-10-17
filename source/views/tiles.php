<?php
function makeTiles() {
    $colorMap = [
        1 => '#FF0000',
        2 => '#EDAA10',
        3 => '#00A000',
        4 => '#DA0822',
        5 => '#FF4000',
        6 => '#00AED9',
        7 => '#FDBE00',
        8 => '#9F0830',
        9 => '#FF6919',
        10 => '#FF006E',
        11 => '#F9B000',
        12 => '#F08700',
        13 => '#379223',
        14 => '#0D81DF',
        15 => '#56C739',
        16 => '#0E559C',
        17 => '#362397'
    ];
    
    $numberArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 ,13 ,14 ,15 ,16, 17];

    shuffle($numberArray);

    for ($i = 0; $i < 3; $i++) {
        $currentNumber = $numberArray[$i];
        $color = $colorMap[$currentNumber];

        echo '<article class="tile__article" style="background:' . $color . ';">
                <a class="tile__link" href="page.php?sdg='. $currentNumber .'">
                    <img class="tile__img" src="img/sdg' . $currentNumber . '.svg" alt="een foto van 1 van de sdgs">
                </a>
            </article>';
    }
    
}