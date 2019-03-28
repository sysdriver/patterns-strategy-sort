<?php
namespace Sysdriver\Patterns\Strategy;

abstract class Product
{

    protected $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    abstract public function getInfo();
}
