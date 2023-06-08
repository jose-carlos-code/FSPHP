<?php

namespace Source\Traits;

class Cart{
    use UserTrait;
    use AddressTrait;

    private $products;
    private $cart;

    public function add($id, $product, $qtd, $price){
        $this->products[$id] = [
            "id" => $id,
            "product" => $product,
            "qtd" => $qtd,
            "price" => $price,
            "total" => $qtd * $price
        ];
        $this->cart+= $qtd * $price;
    }

    public function remove($id, $qtd){
        if($this->products[$id]["qtd"] < $qtd){
            $this->cart-= $qtd * $this->products[$id]["price"];
            if($this->products[$id]["qtd"] < $qtd){
                $this->products[$id]["qtd"] -= $qtd;
            }
        }else{
            unset($this->products[$id]);
        }
    }

    public function checkout(User $user, Adress $adress){
        $this->setUser($user);
        $this->setAdress($adress);
    }
}