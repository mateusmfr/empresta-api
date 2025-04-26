<?php

namespace Tests\Feature;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class InstitutionTest extends TestCase
{
    #[Test]
    public function it_returns_all_institutions()
    {
        $response = $this->getJson('/api/institutions');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            '*' => [],
        ]);
    }
}
