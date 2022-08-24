<?php

namespace App\Cart;

use App\Collection\Collection;
use App\Model\Product;
use Ramsey\Uuid\UuidInterface;

interface CartInterface
{
    public function getProduct(int $id): ?Product;
    
    public function gettAllProducts(): Collection;
    
    public function addProduct(Product $product): void;

    public function removeProduct(int $id): void;
}
