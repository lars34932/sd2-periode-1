<?php 
    require("../source/views/tiles.php");
    require("../source/views/generateHeader.php");
    require("../source/views/generateCta.php");
    require("../source/views/generateFooter.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cta.css">
    <script src="https://kit.fontawesome.com/6c294d23a1.js" crossorigin="anonymous"></script>
    <title>SDG homepage</title>
</head>
<body>
    <?php
        makeHeader();
    ?>
    <main>
        <section class="tile__section">
            <?php
                makeTiles();
            ?>
        </section>
        <?php
            makeCta();
        ?>
        
    </main>
    <?php
        makeFooter();
    ?>
</body>
</html>