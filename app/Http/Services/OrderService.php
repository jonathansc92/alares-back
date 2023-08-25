<?php

namespace App\Http\Services;

use App\Http\Resources\OrderResource;
use App\Http\Resources\ResourceCollection;
use App\Models\Order;
use Illuminate\Http\Response;

class OrderService
{
    public function get($filter)
    {
        $orders = Order::filter($filter)->with('plan')->paginate();

        return success_response(
            data: new ResourceCollection($orders),
            message: __('messages.retrieved', ['model' => __('models/order.plural')]),
        );
    }

    public static function create($request)
    {
        $order = Order::create($request->validated());

        return success_response(
            data: new OrderResource($order),
            message: __('messages.saved', ['model' => __('models/order.singular')]),
            httpStatus: Response::HTTP_CREATED,
        );
    }

    public function find($order)
    {
        return success_response(
            data: new OrderResource($order),
            message: __('messages.retrieved', ['model' => __('models/order.singular')]),
        );
    }

    public function update($request, $order)
    {
        $order->update($request->validated());

        return success_response(
            data: new OrderResource($order),
            message: __('messages.updated', ['model' => __('models/order.singular')]),
        );
    }

    public function delete($order)
    {
        Order::destroy($order->id);

        return success_response(
            message: __('messages.deleted', ['model' => __('models/order.singular')]),
        );
    }
}
