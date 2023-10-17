<?php
include("../source/views/generatePage.php");
include("../source/views/generateHeader.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/header.css">
    <title>sdg <?php echo $_GET['sdg'];?></title>
</head>
<body>
    <header>
        <?php
            makeHeader();
        ?>
    </header>
    <main>
        <?php
        createPage();
        ?>
    </main>
</body>
</html>