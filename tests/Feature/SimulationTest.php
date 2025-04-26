<?php

namespace Tests\Feature;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class SimulationTest extends TestCase
{
    #[Test]
    public function it_returns_simulation_results_for_valid_data()
    {
        $response = $this->postJson('/api/simulation', [
            'valor_emprestimo' => 10000,
            'instituicoes' => ['A'],
            'convenios' => ['B'],
            'parcela' => 12,
        ]);

        $response->assertStatus(200);

        $response->assertJsonStructure([
            '*' => [
                'instituicao',
                'parcela',
                'valor_parcela',
                'taxa_juros',
                'convenio',
            ]
        ]);
    }

    #[Test]
    public function it_returns_validation_errors_for_invalid_data()
    {
        $response = $this->postJson('/api/simulation', [
            'valor_emprestimo' => 'abc',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['valor_emprestimo']);
    }
}
