<?php
class Komik extends Product implements Info{
    public $jmlhHalaman;

    function __construct($komikTitle, $komikAuthor, $komikPublisher, $komikPrice, $jmlhHalaman){
        parent::__construct($komikTitle, $komikAuthor, $komikPublisher, $komikPrice);
        $this->jmlhHalaman = $jmlhHalaman;
    }

    public function info(){
        // Komik : Naruto | Mashasi khimikage, Shonen Jump (Rp. 300000) - 100 Halaman.
        $str = "{$this->title} | {$this->author}, {$this->publisher} (Rp. {$this->price})" ;
        return $str;
    }

    public function cetakLengkap(){
        $str = "Komik : " . $this->info() . " - {$this->jmlhHalaman} Halaman.";
        // $str = "Komik : {$this->title} | {$this->author}, {$this->publisher} - (Rp. {$this->price}) - {$this->jmlhHalaman} Halaman.";
        return $str;
    }
}