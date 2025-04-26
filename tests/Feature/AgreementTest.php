<?php

namespace Tests\Feature;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class AgreementTest extends TestCase
{
    #[Test]
    public function it_returns_all_agreements()
    {
        $response = $this->getJson('/api/agreements');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            '*' => [],
        ]);
    }
}
