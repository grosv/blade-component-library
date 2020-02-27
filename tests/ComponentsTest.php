<?php

namespace Tests;

use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use NunoMaduro\LaravelMojito\InteractsWithViews;

class ComponentsTest extends TestCase
{
    use InteractsWithViews;
    /** @test */
    public function test_suite_restpects_view_namespaces()
    {
        $this->assertView('bcl::welcome')->contains('Laravel');

    }

    /** @test */
    public function can_show_example_component()
    {
        $this->assertView('bcl::example')->contains('It Worked');
    }
}