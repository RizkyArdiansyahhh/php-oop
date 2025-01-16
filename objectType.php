<?php 

// Menjual Produk
// Komik
class Product{
    public $title;
    public $author;
    public $publisher;
    public $price;

    public function __construct($title, $author, $publisher, $price){
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public function getProps(){
        return "$this->title, $this->author";
    }
}


class CetakInfoProduct{
    function cetak(Product $product){
        $str = "{$product->title} | {$product->author} | {$product->publisher} | {$product->price}";
        return $str;
    }
}

$product1 = new Product("Naruto", "Rizky Ardiansyah", "Rizky Cinema", 300000);
$product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

$cetakProduct1 = new cetakInfoProduct();
echo $cetakProduct1->cetak($product1);




?>