<?php
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