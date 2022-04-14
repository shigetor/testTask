<?php

namespace App;

class Cow extends Animal
{
    protected $id;
    protected $typeProduct;
    protected $minProduct ;
    protected $maxProduct ;
    public function __construct($typeProduct='milk',$minProduct=8,$maxProduct=12){
        parent::__construct();
        $this->id = uniqid();
        $this->typeProduct=$typeProduct;
        $this->minProduct=$minProduct;
        $this->maxProduct=$maxProduct;
    }

    public function getProductType()
    {
        return $this->typeProduct;
    }

    public function getProduct(): int
    {
        return mt_rand($this->minProduct, $this->maxProduct);
    }
}