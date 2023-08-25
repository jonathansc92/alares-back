<?php

namespace App\Http\Controllers;

use App\Http\Filters\OrderFilter;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Services\OrderService;
use App\Models\Order;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    protected $service;

    public function __construct(OrderService $service)
    {
        $this->service = $service;
    }

    public function index(OrderFilter $filter): JsonResponse
    {
        return $this->service->get($filter);
    }

    public function show(Order $order): JsonResponse
    {
        return $this->service->find($order);
    }

    public function store(StoreOrderRequest $request): JsonResponse
    {
        return $this->service->create($request);
    }

    public function update(UpdateOrderRequest $request, Order $order): JsonResponse
    {
        return $this->service->update($request, $order);
    }

    public function destroy(Order $order): JsonResponse
    {
        return $this->service->delete($order);
    }
}
