<html>
<body bgcolor="pink">
    <h1 align = "center"> OUTPUT 2 <br> KULIAH PAW 29 AGUSTUS 2022 </h1> <br>
    <h2> Membuat file php dengan fungsi yang berparameter 3 dan dipanggil 3 kali. </h2>
    <h2>Contoh Pertama</h2>
   <?php
function familyName($fname, $year,$asal) {
  echo "$fname , $year ,$asal<br>";
}

familyName("Hege", "1975","Jepang");
familyName("Stale", "1978", "china");
familyName("Kai Jim", "1983", "indonesia");
?>

<h2>Contoh Kedua</h2>
<?php
function addNumbers(int $a, int $b, int $c) {
  return $a + $b + $c;
}
echo addNumbers(5,12,8); 
echo"<br>";
echo addNumbers(50,12,8); 
echo"<br>";
echo addNumbers(5,120,8); 
?>

<h2>Perulangan For </h2>
    <?php
        for ($iterasi=0; $iterasi < 3 ; $iterasi++){
        echo("<br> Ini adalah contoh perulangan for. Nomor ini " .$iterasi. " adalah contohnya." );
        }
    ?>

<h2> Tipe  Data String </h2>
<?php
    echo("x atau urutan 1 merupakan variabel string yang berisi nama <br> y atau urutan 2 merupakan variabel string yang berisi nomor induk maha siswa <br> z atau urutan 3 merupakan variabel string yang berisi institusi <br><br>");
    $x = "Zalzabila Rani";
    $y = '210411100082';
    $z = 'Teknik Informatika';

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo $z;
    echo("<br><br> Nama saya ".$x.". Nim saya ".$y.". Prodi saya ".$z);
?>

<h2> Tipe Data Integer </h2>
<?php
    $nim = 210411100082;
    $name = "Zalzabila Rani";
    var_dump($nim);
    var_dump($name);
?>
<h2> Tipe Data Array </h2>
    <?php
        echo("Ini berisikan nama panggilan saya yang dimana saya susun dan saya tampilkan dalam array <br><br>");
        $panggilan =array("Zalza","Caca","Rani");
        $jumlah = count($panggilan);
        for($iterasi=0; $iterasi<$jumlah; $iterasi++)
        print("\$panggilan[$iterasi] : $panggilan[$iterasi] <br>\n");
    ?>
</body>
</html>
