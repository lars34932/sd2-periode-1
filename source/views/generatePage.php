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
            $kleur = $row['kleur'];
        }
    } else {
        echo "Query failed: " . $connection->error;
    }

    echo '  <h1 class="page__title">'. $titel .'</h1>
            <section class="page__section">
                <div class="section__div">
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

    $connection->close();
}

