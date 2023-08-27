<?php

namespace App\Http\Services;

use App\Http\Resources\PlanResource;
use App\Http\Resources\ResourceCollection;
use App\Models\Plan;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class PlanService
{
    public function get($filter)
    {
        $plans = Plan::filter($filter)->paginate();

        return success_response(
            data: new ResourceCollection($plans),
            message: __('messages.retrieved', ['model' => __('models/plan.plural')]),
        );
    }

    public static function create($request)
    {
        $plan = Plan::create($request->validated());

        return success_response(
            data: new PlanResource($plan),
            message: __('messages.saved', ['model' => __('models/plan.singular')]),
            httpStatus: Response::HTTP_CREATED,
        );
    }

    public function find($plan)
    {
        return success_response(
            data: new PlanResource($plan),
            message: __('messages.retrieved', ['model' => __('models/plan.singular')]),
        );
    }

    public function update($request, $plan)
    {
        Log::info($request);

        $plan->update($request->validated());

        return success_response(
            data: new PlanResource($plan),
            message: __('messages.updated', ['model' => __('models/plan.singular')]),
        );
    }

    public function delete($plan)
    {
        Plan::destroy($plan->id);

        return success_response(
            message: __('messages.deleted', ['model' => __('models/plan.singular')]),
        );
    }
}
