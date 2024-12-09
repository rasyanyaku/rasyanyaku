<form action=""methf="POST">
    <input type="number" nama="bulan" placeholder="Masukkan bulan">
    <input type="number" name="tanggal" placeholder="masukkan tanggal">
    <input type="submit"  value="kirim" name="tombol">
</form>
<?php
   if (isset($_POST["tombol"])) {
   $bulan = $_POST["bulan"];
   $tanggal = $_POST["tanggal"];
   
   echo $tanggal;
   echo $tanggal;

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
 if ($bulan == 2 && $tanggal > 21&& $tanggal< 20) {
     $keterangan = "Libra";
 }
 if ($bulan == 2 && $tanggal > 7 && $tanggal< 20) {
     $keterangan = "Pisces";
 }
 if ($bulan == 2 && $tanggal > 9&& $tanggal< 20) {
     $keterangan = "Scorpio";
 }
 if ($bulan == 2 && $tanggal > 12&& $tanggal< 20) {
     $keterangan = "Leo";
 }
 if ($bulan == 2 && $tanggal > 20&& $tanggal< 20) {
     $keterangan = "Sagitarius";
 }
 if ($bulan == 2 && $tanggal > 19&& $tanggal< 20) {
     $keterangan = "Virgo";
 }
 if ($bulan == 2 && $tanggal > 15 && $tanggal< 20) {
     $keterangan = "Libra";
 }
 if ($bulan == 2 && $tanggal > 14 && $tanggal< 20) {
     $keterangan = "Libra";
 }
 if ($bulan == 2 && $tanggal > 12 && $tanggal< 20) {
     $keterangan = "Libra";
 }
       
   }

echo $keterangan;
?>