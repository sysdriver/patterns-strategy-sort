<?php
namespace Sysdriver\Patterns\Strategy;

/**
 * Description of Collection
 *
 */
class Collection
{

    private $collection = array();
    private $itemClass;

    public function __construct(string $classname)
    {
        $this->itemClass = $classname;
    }

    public function getItemClass()
    {
        return $this->itemClass;
    }

    public function AddItem(Product $Item)
    {
        if (get_class($Item) == $this->itemClass) {
            $this->collection[] = $Item;
        } else {
            $error = "Wrong item class '" . get_class($Item) . "', expected class '" . $this->itemClass . "'";
            return $error . PHP_EOL;
        }
    }

    public function GetItems()
    {
        return $this->collection;
    }
}
