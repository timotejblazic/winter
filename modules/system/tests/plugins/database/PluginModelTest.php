<?php

namespace System\Tests\Plugins\Database;

use System\Tests\Bootstrap\PluginTestCase;
use Database\Tester\Models\Post;

class PluginModelTest extends PluginTestCase
{
    public function setUp() : void
    {
        parent::setUp();

        include_once base_path() . '/modules/system/tests/fixtures/plugins/database/tester/models/PostList.php';

        $this->runPluginRefreshCommand('Database.Tester');
    }

    public function testCreateFirstPost()
    {
        Post::truncate();
        $post = new Post;
        $post->title = "First post";
        $post->description = "Yay!!";
        $post->save();
        $this->assertEquals(1, $post->id);
    }

    public function testGuardedAttribute()
    {
        $this->expectException(\Illuminate\Database\Eloquent\MassAssignmentException::class);
        $this->expectExceptionMessageMatches('/title/');

        Post::create(['title' => 'Hi!', 'slug' => 'authenticity']);
    }
}
