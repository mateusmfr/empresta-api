<?php

namespace App\Services;

class AgreementService
{
    public function getAll(): array
    {
        $json = file_get_contents(app_path('Data/convenios.json'));
        $agreements = json_decode($json, true);

        return collect($agreements)
            ->mapWithKeys(fn($item) => [$item['chave'] => $item['valor']])
            ->toArray();
    }
}
