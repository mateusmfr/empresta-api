<?php

namespace App\Services;

class SimulationService
{
    public function simulate(array $payload): array
    {
        $json = file_get_contents(app_path('Data/taxas_instituicoes.json'));
        $simulations = json_decode($json, true);

        $loanAmount = $payload['valor_emprestimo'];
        $institutions = $payload['instituicoes'] ?? [];
        $agreements = $payload['convenios'] ?? [];
        $installments = $payload['parcela'] ?? null;

        $filtered = collect($simulations)
            ->when($institutions, fn($col) => $col->whereIn('instituicao', $institutions))
            ->when($agreements, fn($col) => $col->whereIn('convenio', $agreements))
            ->when($installments, fn($col) => $col->where('parcelas', $installments))
            ->map(function ($item) use ($loanAmount) {
                return [
                    'instituicao' => $item['instituicao'],
                    'parcela' => $item['parcelas'],
                    'valor_parcela' => round($loanAmount * $item['coeficiente'], 2),
                    'taxa_juros' => $item['taxaJuros'],
                    'convenio' => $item['convenio'],
                ];
            })
            ->groupBy('instituicao')
            ->toArray();

        return $filtered;
    }
}
