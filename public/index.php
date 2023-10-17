<?php 
    include("../source/views/tiles.php");
    include("../source/views/generateHeader.php");
    include("../source/views/generateCta.php");
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
        <?php
            makeHeader();
        ?>
    </header>
    <main>
        <section class="tile__section">
            <?php
                makeTiles();
            ?>
        </section>
        <?php
            makeCta();
        ?>
        <section class="cta__section">
        </section>
    </main>
</body>
</html>