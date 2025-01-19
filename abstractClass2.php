<?php 

// Menjual Produk
// Komik
abstract class Product{
    private $title;
    private $author;
    private $publisher;
    private $price;
    private $discount = 0;

    public function __construct($title, $author, $publisher, $price){
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public function setTitle($title){
        if(!is_string($title)){
            throw new Exception("Title harus string");
        }else{
            $this->title = $title;
        }
    }

    public function getTitle(){
        return $this->title;
    }

    public function setAuthor($author){
        if(!is_string($author)){
            throw new Exception("Author harus string");
        }else{
            $this->author = $author;
        }
    }
    public function getAuthor(){
        return $this->author;
    }

    public function setPublisher($publisher){
        if(!is_string($publisher)){
            throw new Exception("Publisher harus string");
        }else{
            $this->publisher = $publisher;
        }
    }
    public function getPublisher(){
        return $this->publisher;
    }

    public function setPrice($price){
        if(is_int($price)){
            if($price > 0){
                $this->price = $price - ($price * ($this->discount / 100));
            }
            else{
                throw new Exception("Harga tidak boleh kurang dari 0");
            }
        }else{
            throw new Exception("Harga harus integer");
        }
    }
    public function getPrice(){
        return $this->price - ($this->price * ($this->discount / 100));
    }

    public function setDiscount($discount){
        if(!is_int($discount)){
            throw new Exception("Discount harus integer");
        }else{
            $this->discount = $discount;
        }
    }
    public function getDiscount(){
        return $this->discount;
    }

    abstract public function cetakLengkap();
    
    public function info(){
        // Komik : Naruto | Mashasi khimikage, Shonen Jump (Rp. 300000) - 100 Halaman.
        $str = "{$this->title} | {$this->author}, {$this->publisher} (Rp. {$this->price})" ;
        return $str;
    }
}

class Komik extends Product{
    public $jmlhHalaman;

    function __construct($komikTitle, $komikAuthor, $komikPublisher, $komikPrice, $jmlhHalaman){
        parent::__construct($komikTitle, $komikAuthor, $komikPublisher, $komikPrice);
        $this->jmlhHalaman = $jmlhHalaman;
    }

    public function cetakLengkap(){
        $str = "Komik : " . $this->info() . " - {$this->jmlhHalaman} Halaman.";
        // $str = "Komik : {$this->title} | {$this->author}, {$this->publisher} - (Rp. {$this->price}) - {$this->jmlhHalaman} Halaman.";
        return $str;
    }
}
class Game extends Product{
    public $waktuMain;

    function __construct($gameTitle, $gameAuthor, $gamePublisher, $gamePrice, $waktuMain){
        parent::__construct($gameTitle, $gameAuthor, $gamePublisher, $gamePrice);
        $this->waktuMain = $waktuMain;

    }

    public function cetakLengkap(){
        $str = "Komik : " . $this->info(). " ~ {$this->waktuMain} Jam.";
        // $str = "Game : {$this->title} | {$this->author}, {$this->publisher} - (Rp. {$this->price}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


class CetakInfoProduct{
    public $products = [];

    public function tambahProduct(Product $product){
        $this->products[] = $product;
    }
    function cetak(){
        $str = "Daftar Product : <br/>";

        foreach($this->products as $product){
            $str .= "- {$product->cetakLengkap()} <br/>";
        }
        return $str;
    }
}

$product1 = new Komik("Naruto", "Mashasi khimikage", "Shonen Jump", 300000, 120);
$product2 = new Game("Valorant", "Riot Games", "Riot Games", 250000, 100);

$cetakProduct = new CetakInfoProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);
echo $cetakProduct->cetak();






?>