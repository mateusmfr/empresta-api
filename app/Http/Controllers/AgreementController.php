<?php

namespace App\Http\Controllers;

use App\Services\AgreementService;

class AgreementController extends Controller
{
    protected AgreementService $agreementService;

    public function __construct(AgreementService $agreementService)
    {
        $this->agreementService = $agreementService;
    }

    public function index()
    {
        return response()->json($this->agreementService->getAll());
    }
}
