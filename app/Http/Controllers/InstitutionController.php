<?php

namespace App\Http\Controllers;

use App\Services\InstitutionService;
use Illuminate\Http\JsonResponse;

class InstitutionController extends Controller
{
    protected InstitutionService $institutionService;

    public function __construct(InstitutionService $institutionService)
    {
        $this->institutionService = $institutionService;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->institutionService->getAll());
    }
}
