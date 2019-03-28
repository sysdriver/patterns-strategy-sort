<?php
namespace Sysdriver\Patterns\Strategy;

/**
 * Description of ObjectCollection
 * 
 */
class ObjectCollection
{

    /**
     * @var ComparatorInterface
     */
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function sort(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}
