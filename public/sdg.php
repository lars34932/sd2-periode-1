<?php
require("../source/views/generateHeader.php");
require("../source/views/generateSdg.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sdg.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
    <?php
        makeHeader();
    ?>
    <main>
        <?php
            makeSdg();
        ?>
        <div class="invis__sdg"></div>
    </main>
</body>
</html>