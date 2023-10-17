<?php
function createPage() {

    require_once("../source/connect.php");

    $connection = db_connect();

    $sdg = $_GET['sdg'];

    $sql = "SELECT * FROM page WHERE id = '" . $sdg . "';";
    $result = $connection->query($sql);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['ID'];
            $titel = $row['Titel'];
            $tekst1 = $row['Tekst1'];
            $tekst2 = $row['Tekst2'];
            $path1 = $row['imgPath1'];
            $path2 = $row['imgPath2'];
        }
    } else {
        echo "Query failed: " . $connection->error;
    }

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

    $color = $colorMap[$id];

    echo '  <h1 class="page__title">'. $titel .'</h1>
            <section class="page__section">
                <div class="section__div">
                    <p>'. $tekst1 .'</p>
                </div>
                <div class="section__div">
                    <img class="sdg__img" style="background: '. $color .';"src="'. $path1 .'" alt="">
                </div>
                <div class="section__div">
                    <img src="'. $path2 .'" alt="">
                </div>
                <div class="section__div">
                    <p>'. $tekst2 .'</p>
                </div>
            </section>';

    $connection->close();
}

