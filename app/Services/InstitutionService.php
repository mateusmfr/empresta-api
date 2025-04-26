<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class InstitutionService
{
    public function getAll(): array
    {
        $json = file_get_contents(app_path('Data\instituicoes.json'));
        $institutions = json_decode($json, true);

        return collect($institutions)
            ->mapWithKeys(fn($item) => [$item['chave'] => $item['valor']])
            ->toArray();
    }
}
