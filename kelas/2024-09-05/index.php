<?php
   for ($i=0; $i <10 ; $i++) {
    echo $i; 
    
   }
   echo "<br>";
   for ($i=10; $i >=0 ; $i--) {
    echo $i;
 
    }

   echo "<br>";
   $ganjil=5%2;
   echo$ganjil;

   echo "<br>";
   for ($i=1; $i <100 ; $i++) {
    
    $ganjil=$i % 2;
    echo $ganjil;
    if ( $ganjil==1) {
        echo $ganjil;
    }

      }
      echo "<br>";
      $kkm = 80;
      $nilai = 75;
      if ($nilai > $kkm) {
        echo "lulus";
      }
      else {
        echo "tidak lulus";
      }
      echo "<br>";
      $status = "tidak lulus";

      if ($nilai > $kkm) {
        $status ="lulus";
      }
      
      echo $status;
      echo "<br>";
       
      $raport = 0;
      $tugas = 1;

      if ($tugas == 1) {
        $raport = 80;
      }

      echo $raport;
      echo "<br>";

      $bulan = 100;
      $tanggal = 5;

      $keterangan = "benar";

          // keterangan = "benar";
      if ($bulan > 0 && $bulan < 13) {
        // keterangan = "benar";
        if ($bulan == 1 && $tanggal > 0 && $tanggal < 20){
            $keterangan = "Aquarius";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal < 32) {
            $keterangan = "Capricorn";

        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal< 20) {
            $keterangan = "Libra";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal< 20) {
            $keterangan = "Libra";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal< 20) {
            $keterangan = "Libra";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal< 20) {
            $keterangan = "Libra";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal< 20) {
            $keterangan = "Libra";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal< 20) {
            $keterangan = "Libra";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal< 20) {
            $keterangan = "Libra";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal< 20) {
            $keterangan = "Libra";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal< 20) {
            $keterangan = "Libra";
        }
              
          }
       
      echo $keterangan;
?>