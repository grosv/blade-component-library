<?php

namespace Tests;

use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use NunoMaduro\LaravelMojito\InteractsWithViews;

class ComponentsTest extends TestCase
{

    /** @test */
    public function test_suite_restpects_view_namespaces()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertView()->contains('Laravel');

    }

    /** @test */
    public function can_show_success_component()
    {
        $response = $this->withoutExceptionHandling()->get('/success');

        $response->assertView()->contains('It Worked');
    }
}