<?php

namespace Tests\Unit\Pages\Help;

use Tests\TestCase;
use Tests\CreatesUser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HelpIndexPageTest extends TestCase
{
    use DatabaseMigrations, CreatesUser;

    /** @test */
    public function it_can_refresh_the_user_page()
    {
        $this->createUser()->actingAs($this->user)
            ->visit(route('canvas.admin.help'))
            ->click('Refresh Help');
        $this->assertSessionMissing('errors');
        $this->seePageIs(route('canvas.admin.help'));
    }
}
