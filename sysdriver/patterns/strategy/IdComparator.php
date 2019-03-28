<?php
namespace Sysdriver\Patterns\Strategy;

/**
 * Description of IdComparator
 * 
 */
class IdComparator implements ComparatorInterface
{

    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     */
    public function compare($a, $b): int
    {
        return $a->GetSortField() <=> $b->GetSortField();
    }
}
