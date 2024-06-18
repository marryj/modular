<?php

namespace Modules\Order\Tests\Orders\Modules;

use Modules\Order\Models\Order;
use Modules\Order\Tests\OrderTestCase;
use Tests\TestCase;

class OrderTest extends OrderTestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $order = Order::factory()->create();


        $this->assertTrue(true);
    }
}
