<?php

namespace App;


class Chicken extends Animal{
    protected $id;
    protected $typeProduct;
    protected $minProduct ;
    protected $maxProduct ;
    public function __construct($typeProduct='eggs',$minProduct=0,$maxProduct=1){
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
