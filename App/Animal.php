<?php
namespace App;
abstract class Animal
{
    protected $id;
    protected $typeProduct;
    protected $minProduct;
    protected $maxProduct;

    public function __construct()
    {
        $this->id = uniqid();
    }

    abstract public function getProductType();

    abstract public function getProduct(): int;
}
