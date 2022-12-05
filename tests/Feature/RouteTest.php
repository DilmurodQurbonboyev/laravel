<?php

namespace Tests\Feature;

use Tests\TestCase;

class RouteTest extends TestCase
{
    public function test_welcome_page()
    {
        $response = $this->get('/');
        $response->assertViewIs('welcome');
        $response->assertSee('Laravel');
    }
}
