<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * @internal
 * @coversNothing
 */
class PostTest extends TestCase
{
    use DatabaseTransactions;

    public function testNonExistingShow404(): void
    {
        $response = $this->get(route('posts.show', ['non-existing-post']));

        $response->assertNotFound();
    }

    public function testIsShowsAPost(): void
    {
    }
}
