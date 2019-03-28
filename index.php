<?php
require __DIR__ . '/vendor/autoload.php';

use Sysdriver\Patterns\Strategy\Apple;
use Sysdriver\Patterns\Strategy\Cheburek;
use Sysdriver\Patterns\Strategy\Product;
use Sysdriver\Patterns\Strategy\Collection;
use Sysdriver\Patterns\Strategy\ObjectCollection;
use Sysdriver\Patterns\Strategy\IdComparator;

$appleColl = new Collection(Apple::class);
$chbrkColl = new Collection(Cheburek::class);

//@todo: add factory and maybe builder to generate collections
$objCol = new ObjectCollection(new IdComparator());

for ($i = 1; $i <= 1e1; $i++) {
    $apple = new Apple($i);
    $apple->setSize(rand(1, 20));
    $appleColl->AddItem($apple);

    $chbrk = new Cheburek($i);
    $chbrk->setWeight(rand(1, 25));
    $chbrkColl->AddItem($chbrk);
}

$getInfoFunc = function (&$value, $key) {
    echo $value->getInfo() . PHP_EOL;
};

echo 'Before Sort:' . PHP_EOL;
$items = $appleColl->GetItems();
//output info
array_walk($items, $getInfoFunc);
$items = $objCol->sort($items);
echo 'After Sort:' . PHP_EOL;
array_walk($items, $getInfoFunc);
