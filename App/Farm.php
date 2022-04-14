<?php

namespace App;
class Farm
{

    public array $animalArray = [];
    public array $productsArray = [];
    public array $nameAnimal =[];


    public function createFarm(array $countAnimal): void
    {
        if (empty($this->animalArray)) {
            foreach ($countAnimal as $name => $value) {
                $object = ucfirst($name);
                $object = __NAMESPACE__ . '\\' . $object;
                for ($i = 1; $i <= $value; $i++) {
                    $this->animalArray["$name"][] = new $object();
                    $this->nameAnimal["$name"] = $value;
                }
            }
        }

    }
    public function addAnimal(array $countAnimal):void{
        foreach ($countAnimal as $name => $amount) {
            $object = ucfirst($name);
            $object = __NAMESPACE__ . '\\' . $object;
            for ($i = 1; $i <= $amount/2; $i++) {
                $this->animalArray["$name"][] = new $object();
                $this->nameAnimal["$name"] += $amount;
            }
        }
    }

    public function Product(): void
    {
        foreach ($this->animalArray as $key => $animalUnit) {
            $product = 0;
            foreach ($animalUnit as $animal) {
                $product += $animal->getProduct();
            }
            $this->productsArray["$key"] = $product;
        }
    }
}
