<?php

namespace App\Http\Controllers;

use App\Services\AgreementService;
use Illuminate\Http\JsonResponse;

class AgreementController extends Controller
{
    protected AgreementService $agreementService;

    public function __construct(AgreementService $agreementService)
    {
        $this->agreementService = $agreementService;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->agreementService->getAll());
    }
}
