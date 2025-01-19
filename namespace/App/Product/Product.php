<?php 
abstract class Product{
    protected $title;
    protected $author;
    protected $publisher;
    protected $price;
    protected $discount = 0;

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

    abstract public function info();
}