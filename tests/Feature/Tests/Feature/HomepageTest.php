<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * @internal
 * @coversNothing
 */
class HomepageTest extends TestCase
{
    //use DatabaseMigrations;
    //use DatabaseTransactions;

    public function testItShowsHomepage(): void
    {
        $response = $this->get(route('homepage'));

        $response->assertSuccessful();
        $response->assertViewIs('homepage');
    }
}
