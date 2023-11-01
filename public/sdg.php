<?php
require("../source/views/generateHeader.php");
require("../source/views/generateSdg.php");
require("../source/views/generateFooter.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sdg.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>SDG overview</title>
    <link rel=icon type="img/x-icon" href="img/NVVN.png">
</head>
<body>
    <?php
        makeHeader();
    ?>
    <main>
        <?php
            makeSdg();
        ?>
    </main>
    <?php   
        makeFooter();
    ?>
</body>
</html>