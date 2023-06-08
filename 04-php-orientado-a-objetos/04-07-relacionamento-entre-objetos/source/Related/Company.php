<?php
namespace Source\Related;

class Company{
    private $company;
    /**
     * @var Adress
     */
    private $adress;
    private $team;
    private $products;  

    public function bootCompany($company, $adress){
        $this->company = $company;
        $this->adress = $adress;
    }

    public function boot($company, Adress $adress){
        $this->company = $company;
        $this->adress = $adress;
    }

    public function addProduct(Product $product){
        $this->products[] = $product;
    }

    public function addTeamMember($job, $firstName, $lastName){
        $this->team[] = new User($job, $firstName, $lastName);
    }

    public function getCompany(){
        return $this->company;
    }

    public function setCompany($company){
        $this->company = $company;
    }

    
    public function getAdress(): Adress{
        return $this->adress;
    }

    public function setAdress($adress){
        $this->adress = $adress;
    }

    
    public function getTeam(){
        return $this->team;
    }

    public function setTeam($team){
        $this->team = $team;
    }


    
    public function getProduct(){
        return $this->products;
    }

    public function setProduct($product){
        $this->products = $product;
    }



}