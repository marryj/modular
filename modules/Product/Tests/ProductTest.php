<?php

namespace Modules\Product\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Product\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
//        $tmp = new Product();
        $product = Product::factory()->create();
        self::assertNotEmpty($product->name);
    }
}
