<?php
require_once("../source/connect.php");

function makeTiles() {
    $numberArray = range(1, 17);
    shuffle($numberArray);

    $connection = db_connect();

    for ($i = 0; $i < 3; $i++) {
        $currentNumber = $numberArray[$i];
        $sql = "SELECT * FROM page WHERE id = ?";
        $stmt = $connection->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $currentNumber);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $color = $row['kleur'];
                    $path = $row['imgPath1'];
                }
            } else {
                echo "Query failed: " . $connection->error;
            }

            echo '
            <article class="tile__article" style="background:' . $color . ';">
                <a class="tile__link" href="page.php?sdg=' . $currentNumber . '">
                    <img class="tile__img" src="' . $path . '" alt="een foto van 1 van de sdgs">
                </a>
            </article>';
        }
    }
}