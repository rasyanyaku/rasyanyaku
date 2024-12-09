<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 1 Sidoarjo</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="header"></div>
        <div class="logo">
            
        </div>
        <div class="sekolah"></div>
        <div class="nav"></div>
        <ul>
            <li><a href="?menu = Home">Home</a></li>
            <li><a href="?menu = Sejarah">Sejarah</a></li>
            <li><a href="?menu = Kegiatan">Kegiatan</a></li>
            <li><a href="?menu = Jadwal">Galeri</a></li>
            <li><a href="?menu = Jadwal">Jadwal</a></li>
            <li><a href="?menu = Kontak">Kontak</a></li>
        </ul>

        <div class="konten">
            <?php
            if (isset($_GET["menu"])){
                $menu = $_GET["menu"]
              echo $menu;
              if ($menu == "Home")
              require_once ("pages/home.php")
            }
            if($menu == "sejarah"){
                require_once ("pages/sejarah.php")
            }
            if($menu == "Kegiatan"){
                require_once ("pages/Kegiatan.php")
            }
            if($menu == "Galeri"){
                require_once ("pages/Galeri.php")
            }
            if($menu == "Jadwal"){
                require_once ("pages/Jadwal.php")
            }
            if($menu == "Kontak"){
                require_once ("pages/Kontak.php")
            }else {
                require_once("pages.home.php")
            }

            

            ?>

        </div>

        <div class="foter">
            <p>web inj dibuat cihuy :</p>
        </div>
</body>
</html>