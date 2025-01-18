<?php 
class Contoh{
    public static $angka = 1;

    public static function tampil(){
        return "Halo " . self::$angka++ . " kali";
    }
}

class Contoh2{
    public static $angka = 1;

    public function tampil(){
        return "Halo " . self::$angka++ . " kali";
    }
}


$obj1 = new Contoh2();
echo Contoh2::$angka;
echo "<br>";
echo $obj1->tampil();
echo "<br>";
echo $obj1->tampil();
echo "<br>";
echo $obj1->tampil();

echo "<hr/>";

$obj2 = new Contoh2();
echo Contoh2::$angka;
echo "<br>";
echo $obj2->tampil();
echo "<br>";
echo $obj2->tampil();
echo "<br>";
echo $obj2->tampil();

?>