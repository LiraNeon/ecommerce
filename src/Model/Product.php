<?php

namespace App\Model;

use Ramsey\Uuid\UuidInterface;

class Product
{
    private UuidInterface $id;
    private string $name;
    private int $price;

    public function __construct(UuidInterface $id, string $name, int $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    } 
}
