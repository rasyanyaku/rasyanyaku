<?php

   $judul ="belajar php";
   $judul1 ="Siswa Rpl";
   $judul2 ="SMKN 2 Buduran";
   $juduls =["Belajar php","Sswa rpl","SMKN 2 Buduran"];

   echo $juduls[0];
   for($i=0;$i < 3; $i++){
    echo "<br>";
    echo $i;
    echo $juduls[$i];
   }
    foreach ($juduls as $key ){
        echo "<br>";
        echo $key;
    }
   //echo $judul1;
   
   ?>
     <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
      <body>
   <h1><?= $judul?></h1>
   <h2><?= $judul1?></h2>
   <h3><?=$judul2?></h3> 
  <?php
   echo $judul1?></h4>
    ?>
   <h1> <?= $juduls[0]?></h1>
   <h2><?=$juduls[1]?></h2>
   <h3><?=$juduls[2]?></h3>
   <?php
 for ($i=0; $i < 3; $i++) { 
    echo "<h1>";
    echo $juduls[$i];
    echo"</h1>";
 }


   ?>
   <h1>Menampilkan PHP</h1>
   <?php
   for ($i=0; $i <3; $i++) { 
    ?>
    <h1><?=$juduls[$i]?></h1>
    <?php
   } 
   ?>
   <?php
       foreach ($juduls as $key) {
        echo "<h2>";
        echo $key;
        echo "<h2>";
        echo "<br>";
       }
   ?>
   <?php
   foreach ($juduls as $key ) {
    ?>
    <h2><?= $key?></h2>
    <?php
   }
   ?>
   <hr>
   <?php
   for ($i=0 ; $i <=10  ; $i++) {
    echo "<h$1>";
    echo "SMKN 2 Buduran"; 
    echo "<h1$i>";
   }
   ?>
   <?php
   for ($i=0; $i >=10; $i--) {
    echo "<h$i>">"SMKN 2 Buduran"."</h$i>";
   }
   ?>
   </body>
   </html>




