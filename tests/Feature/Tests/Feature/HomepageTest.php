<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * @internal
 * @coversNothing
 */
class HomepageTest extends TestCase
{
    use DatabaseTransactions;

    public function testItShowsHomepage(): void
    {
        $response = $this->get(route('homepage'));

        $response->assertSuccessful();
        $response->assertViewIs('blog.homepage');
    }

    public function testItShowsCategoriesInSidebar(): void
    {
    }

    public function testItShowsArhivesInSidebar(): void
    {
    }

    public function testItShowsPosts(): void
    {
    }
}
