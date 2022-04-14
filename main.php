<?php
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
    return false;
});

use App\Chicken;
use App\Cow;
use App\Farm;

$coteObj = new Farm();
$coteObj->createFarm([
    'cow' => 10,
    'chicken' => 20
]);
$coteObj->Product();
echo ( 'Всего коров :'. $coteObj->nameAnimal['cow']."\n".'Всего куриц :'.$coteObj->nameAnimal['chicken']."\n");
echo 'Собрано литров молока : ' . $coteObj->productsArray['cow']*7 . "\n" .
    'Собрано штук яиц : ' . $coteObj->productsArray['chicken']*7 . "</br>";
$coteObj->addAnimal(
    [
        'cow' =>3,
        'chicken'=>2,
    ]
);
$coteObj->Product();
echo ( 'Всего коров :'. $coteObj->nameAnimal['cow']."\n".'Всего куриц :'.$coteObj->nameAnimal['chicken']."\n");
echo 'Собрано литров молока : ' . $coteObj->productsArray['cow']*7 . "\n" .
    'Собрано штук яиц : ' . $coteObj->productsArray['chicken']*7;