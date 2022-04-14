<?php
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
    return false;
});


use App\Farm;


// Создаем фермы и добавляем животных
$Farm = new Farm();
$Farm->createFarm([
    'cow' => 10,
    'chicken' => 20
]);

//Выодим типы и количество животных
echo ( 'Всего коров :'. $Farm->nameAnimal['cow']."\n".'Всего куриц :'.$Farm->nameAnimal['chicken']."\n");

// Выводим сколько было собрано продуктов
$Farm->Product();
echo 'Собрано литров молока : ' . $Farm->productsArray['cow']*7 . "\n" .
    'Собрано штук яиц : ' . $Farm->productsArray['chicken']*7 . "</br>";

//Снова добавляем животных
$newFarm=
    [
        'cow' =>1,
        'chicken'=>5,
    ];

\App\addAnimal($newFarm,$Farm);

echo ( 'Всего коров :'. $Farm->nameAnimal['cow']."\n".'Всего куриц :'.$Farm->nameAnimal['chicken']."\n");

// И снова выводим сколько получили продуктов
$Farm->Product();
echo 'Собрано литров молока : ' . $Farm->productsArray['cow']*7 . "\n" .
    'Собрано штук яиц : ' . $Farm->productsArray['chicken']*7;