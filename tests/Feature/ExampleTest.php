<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_the_application_returns_a_successful_response_for_login_page()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response_for_register_page()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
