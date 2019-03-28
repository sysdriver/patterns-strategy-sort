<?php
namespace Sysdriver\Patterns\Strategy;

use Sysdriver\Patterns\Strategy\Product;
use Sysdriver\Patterns\Strategy\Sortable;

Class Apple extends Product implements Sortable
{

    protected $size;

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $newSize)
    {
        $this->size = $newSize;
    }

    public function getInfo()
    {
        return static::class . ', id=' . $this->getId() . ', size ' . $this->size;
    }

    public function GetSortField()
    {
        return $this->getSize();
    }
}
