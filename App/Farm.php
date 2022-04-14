<?php

namespace App;
class Farm
{

    public array $animalArray = [];
    public array $productsArray = [];
    public array $nameAnimal =[];

    /**
     * Создание фермы, добавление видов животных
     * @param array $countAnimal
     * @return void
     */
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

    /**
     * Добавление животных в фермы
     * @param array $countAnimal
     * @return void
     */


    /**
     * Добавление в массив количество полученных продуктов
     */
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
// Функция добавления животных
//Исправил дабы можно было добавлять массивы животных не требуя вызова объекта класса
function addAnimal(array $countAnimal, Farm $farm):void{
    foreach ($countAnimal as $name => $amount) {
        $object = ucfirst($name);
        $object = __NAMESPACE__ . '\\' . $object;
        for ($i = 1; $i <= $amount; $i++) {
            $farm->animalArray["$name"][] = new $object();
            $farm->nameAnimal["$name"] += 1;
        }
    }
}
