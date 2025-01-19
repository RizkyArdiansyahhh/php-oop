<?php 
class Game extends Product implements Info{
    public $waktuMain;

    function __construct($gameTitle, $gameAuthor, $gamePublisher, $gamePrice, $waktuMain){
        parent::__construct($gameTitle, $gameAuthor, $gamePublisher, $gamePrice);
        $this->waktuMain = $waktuMain;
    }
    public function info(){
        // Komik : Naruto | Mashasi khimikage, Shonen Jump (Rp. 300000) - 100 Halaman.
        $str = "{$this->title} | {$this->author}, {$this->publisher} (Rp. {$this->price})" ;
        return $str;
    }

    public function cetakLengkap(){
        $str = "Komik : " . $this->info(). " ~ {$this->waktuMain} Jam.";
        // $str = "Game : {$this->title} | {$this->author}, {$this->publisher} - (Rp. {$this->price}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}