<?php
function makeSdg() {
    for ($i = 1; $i < 18; $i++) {
        
        require_once("../source/connect.php");

        $connection = db_connect();

        $sql = "SELECT * FROM page WHERE id = '" . $i . "';";
        $result = $connection->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $color = $row['kleur'];
            }
        } else {
            echo "Query failed: " . $connection->error;
        }
        

        echo '
            <a style="background:' . $color . ';" class="sdg" href="page.php?sdg='. $i .'">
                <img class="sdg__img" src="img/sdg' . $i . '.svg" alt="een foto van 1 van de sdgs">
            </a>';
    }
}