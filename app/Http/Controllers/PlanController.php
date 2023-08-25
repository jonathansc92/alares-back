<?php

namespace App\Http\Controllers;

use App\Http\Filters\PlanFilter;
use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;
use App\Http\Services\PlanService;
use App\Models\Plan;
use Illuminate\Http\JsonResponse;

class PlanController extends Controller
{
    protected $service;

    public function __construct(PlanService $service)
    {
        $this->service = $service;
    }

    public function index(PlanFilter $filter): JsonResponse
    {
        return $this->service->get($filter);
    }

    public function show(Plan $plan): JsonResponse
    {
        return $this->service->find($plan);
    }

    public function store(StorePlanRequest $request): JsonResponse
    {
        return $this->service->create($request);
    }

    public function update(UpdatePlanRequest $request, Plan $plan): JsonResponse
    {
        return $this->service->update($request, $plan);
    }

    public function destroy(Plan $plan): JsonResponse
    {
        return $this->service->delete($plan);
    }
}
