<form action="" method="get">
    <input type="number" name="bill" placeholder ="bilangan1">
    <input type="number" name="bill2" placeholder ="bilangan2">
    <input type="submit" name="tambah" value="tambah">
    <input type="submit" name="kali" value="kali">
        <input type="submit" name="kurang" value="kurang">
            <input type="submit" name="bagi" value="bagi">
            <?php
            if(isset($_GET)['tambah']) {
                $bil1 =$_GET['bil1'];
                $bil2 =$_GET ['bil2'];
                $hasil = $bil1 + $bil2;
                echo $hasil;
            }
            if (isset($_GET('kurang'))){
                $bil1 = $_GET['bil'];
                $bil2 = $_GET['bil2'];
                $hasil = $bil1 - $bil2;
                echo $hasil;
            }
            if (isset($_GET'(kali'))) {
                $bil1 = $_GET['bil1'];
                $bil2 = $_GET['BIL2'];
                $hasil = $bil1 * $bil2;
                echo $hasil;
            }
            if (isset($_GET('bagi'))) {
                $bil1 = $_GET['bil1'];
                $bil2 = $_GET['bil2'];
                $hasil = $bil1 % $bil2;
                echo $hasil;
            }
            
            ?>

</form>