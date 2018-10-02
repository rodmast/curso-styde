<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /** @test */
    function it_loads_the_users_list_page() 
    {
    $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }
}
