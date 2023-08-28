<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\Plan;
use Tests\TestCase;

class OrderTest extends TestCase
{
    private $url = '/api/orders/';

    public function test_index(): void
    {
        $response = $this->get($this->url);

        $response->assertStatus(200);
    }

    public function test_store(): void
    {
        $plan = Plan::factory()->create();

        $data = [
            'plan_id' => $plan->id,
            'name' => fake()->name(),
            'email' => fake()->email(),
            'phone' => fake()->numerify('###########')
        ];

        $response = $this->post($this->url, $data);

        $response->assertStatus(201);
    }

    public function test_show(): void
    {
        $plan = Plan::factory()->create();
        $order = Order::factory()->create();
        $response = $this->get($this->url . $order->id);
        $response->assertStatus(200);
    }

    public function test_update(): void
    {
        $plan = Plan::factory()->create();
        $order = Order::factory()->create();

        $response = $this->put($this->url . $order->id, Order::factory()->make()->toArray());
        $response->assertStatus(200);
    }

    public function test_destroy(): void
    {
        $plan = Plan::factory()->create();
        $order = Order::factory()->create();

        $response = $this->delete($this->url . $order->id);
        $response->assertStatus(200);
    }
}
