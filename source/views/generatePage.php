<?php
function makePage() {
    require_once("../source/connect.php");

    $connection = db_connect();

    $sql = "SELECT * FROM page WHERE id = ?";
    $stmt = $connection->prepare($sql);

    $sdg = $_GET['sdg'];

    if ($stmt) {

    $stmt->bind_param("i", $sdg);

    $stmt->execute();

    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $id = $row['ID'];
        $titel = $row['Titel'];
        $tekst1 = $row['Tekst1'];
        $tekst2 = $row['Tekst2'];
        $path1 = $row['imgPath1'];
        $path2 = $row['imgPath2'];
        $kleur = $row['kleur']; 
    }

    } else {

    die("Error in SQL statement: " . $connection->error);
    }
    
    echo '  <h1 class="page__title">'. $titel .'</h1>
            <section class="page__section">';
            if ($sdg == 1 || $sdg == 4 || $sdg == 7 || $sdg == 10 || $sdg == 13 || $sdg == 16) {
                echo 
                '
                <div class="section__div">
                    <img class="sdg__img" style="background: '. $kleur .';"src="'. $path1 .'" alt="">
                </div>
                <div class="section__div">
                    <p>'. $tekst1 .'</p>
                </div>
                <div class="section__div">
                    <img src="'. $path2 .'" alt="">
                </div>
                <div class="section__div">
                    <p>'. $tekst2 .'</p>
                </div>
                </section>';
            } elseif ($sdg == 2 || $sdg == 5 || $sdg == 8 || $sdg == 11 || $sdg == 14 || $sdg == 17) {
                echo 
                '<div class="section__div">
                    <p>'. $tekst1 .'</p>
                </div>
                <div class="section__div">
                    <img class="sdg__img" style="background: '. $kleur .';"src="'. $path1 .'" alt="">
                </div>
                <div class="section__div">
                    <img src="'. $path2 .'" alt="">
                </div>
                <div class="section__div">
                    <p>'. $tekst2 .'</p>
                </div>
                </section>';
            } else {
                echo 
                '<div class="section__div">
                    <p>'. $tekst1 .'</p>
                </div>
                <div class="section__div">
                    <img class="sdg__img" style="background: '. $kleur .';"src="'. $path1 .'" alt="">
                </div>
                <div class="section__div">
                <p>'. $tekst2 .'</p>
                </div>
                <div class="section__div">
                    <img src="'. $path2 .'" alt="">
                </div>
                </section>';
            }
}

