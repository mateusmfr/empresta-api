<?php

namespace App\Http\Controllers;

use App\Services\InstitutionService;

class InstitutionController extends Controller
{
    protected InstitutionService $institutionService;

    public function __construct(InstitutionService $institutionService)
    {
        $this->institutionService = $institutionService;
    }

    public function index()
    {
        return response()->json($this->institutionService->getAll());
    }
}
