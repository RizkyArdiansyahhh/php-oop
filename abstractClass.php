<?php 

abstract class buah{
    private $buah;

    abstract public function makan();

    public function setBuah($buah){
        $this->buah = $buah;
    }
    public function getBuah(){
        return $this->buah;
    }
}


class durian extends buah{
    public function makan(){
        // kupas
        // kunyah
        // Nyam.. nyam..
    }
}

class apel extends buah{
    public function makan(){
        // kupas
        // kunyah
        // makan sampai tengah
        // nyam.. nyam..
    }
}

$apel = new apel();
$apel->setBuah("apel");
echo $apel->getBuah();
echo "<br>";

$durian = new durian();
$durian->setBuah("durian");
echo $durian->getBuah();




?>