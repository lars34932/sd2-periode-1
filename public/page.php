<?php
    require("../source/views/generatePage.php");
    require("../source/views/generateHeader.php");
    require("../source/views/generateCta.php");
    require("../source/views/generateFooter.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cta.css">
    <title>SDG <?php echo $_GET['sdg'];?></title>
    <link rel=icon type="img/x-icon" href="img/NVVN.png">
</head>
<body>
    <?php
        makeHeader();
    ?>
    <main>
        <?php
            makePage();
        ?>
        <?php
            makeCta();
        ?>
    </main>
    <?php
        makeFooter();
    ?>
</body>
</html>