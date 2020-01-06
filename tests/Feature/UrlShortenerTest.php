<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UrlShortenerTest extends TestCase
{
    /** @test  */
    public function isRouteWorking()
    {
        $this->get('/')->assertOk();
    }
}
