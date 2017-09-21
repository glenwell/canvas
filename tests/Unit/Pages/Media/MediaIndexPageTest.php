<?php

namespace Tests\Unit\Pages\Media;

use Tests\TestCase;
use Tests\CreatesUser;
use Tests\InteractsWithDatabase;

class MediaIndexPageTest extends TestCase
{
    use InteractsWithDatabase, CreatesUser;

    /** @test */
    public function it_can_refresh_the_media_page()
    {
        $this->createUser()->actingAs($this->user)
            ->visit(route('canvas.admin.upload'))
            ->click('Refresh Media');
        $this->assertSessionMissing('errors');
        $this->seePageIs(route('canvas.admin.upload'));
    }
}
