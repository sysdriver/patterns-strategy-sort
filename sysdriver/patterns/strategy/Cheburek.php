<?php
namespace Sysdriver\Patterns\Strategy;

use Sysdriver\Patterns\Strategy\Sortable;

Class Cheburek extends Product
{

    protected $weight;

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $newWeight)
    {
        $this->weight = $newWeight;
    }

    public function getInfo()
    {
        return static::class . ', id=' . $this->getId() . ', weight ' . $this->weight;
    }

    public function GetSortField()
    {
        return $this->getWeight();
    }
}
