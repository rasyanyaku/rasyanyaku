<?php
require_once("content.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="header">
    <h1>ini adalah header</h1>
    <?php
    require_once("pages/prestasi.php");
    ?>
</div>
<div class="content">
    <h1>ini adalah content</h1>
</div>
<div class="footer">
    <h1>ini adalah footer</h1>
</div>

<php>
<?php
foreach ($pages as $key => $value) {
    ?>
    <li><a href="page?=<?= $value?>"><?=$key?></a></li>
<?php
}
?>


<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="pages/Jurusan.php">Jurusan</a></li>
    <li><a href="pages/Sejarah.php">Sejarah</a></li>
    <li><a href="pages/Contact.php">Contact</a></li>
</ul>


    <?php
        foreach ($gambars as $key) {
    ?>
         <img src="images/<?= $key; ?>" alt="">
    <?php
        }
    ?>
</body>
</html>
