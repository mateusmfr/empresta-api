<?php

namespace App\Http\Controllers;

use App\Services\SimulationService;
use App\Http\Requests\SimulationRequest;
use Illuminate\Http\JsonResponse;

class SimulationController extends Controller
{
    protected SimulationService $simulationService;

    public function __construct(SimulationService $simulationService)
    {
        $this->simulationService = $simulationService;
    }

    public function index(SimulationRequest $request): JsonResponse
    {
        return response()->json($this->simulationService->simulate($request->validated()));
    }
}
