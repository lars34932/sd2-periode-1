<?php
function makeTiles() {
    $numberArray = range(1, 17);

    shuffle($numberArray);

    for ($i = 0; $i < 3; $i++) {
        $currentNumber = $numberArray[$i];
        
        require_once("../source/connect.php");

        $connection = db_connect();

        $sql = "SELECT * FROM page WHERE id = '" . $currentNumber . "';";
        $result = $connection->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $color = $row['kleur'];
            }
        } else {
            echo "Query failed: " . $connection->error;
        }
        

        echo '
        <article class="tile__article" style="background:' . $color . ';">
                <a class="tile__link" href="page.php?sdg='. $currentNumber .'">
                    <img class="tile__img" src="img/sdg' . $currentNumber . '.svg" alt="een foto van 1 van de sdgs">
                </a>
            </article>';
    }
    
}