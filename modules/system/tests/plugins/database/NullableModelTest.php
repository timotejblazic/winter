<?php

namespace System\Tests\Plugins\Database;

use System\Tests\Bootstrap\PluginTestCase;
use Database\Tester\Models\NullablePost;

class NullableModelTest extends PluginTestCase
{
    public function setUp() : void
    {
        parent::setUp();

        include_once base_path() . '/modules/system/tests/fixtures/plugins/database/tester/models/PostList.php';

        $this->runPluginRefreshCommand('Database.Tester');
    }

    public function testNullifyingFields()
    {
        // Save as SQL default
        $post = NullablePost::create(['author_nickname' => ''])->reload();
        $this->assertEquals('Winter', $post->author_nickname);

        // Save as empty string
        $post->author_nickname = '';
        $post->save();
        $this->assertNull($post->author_nickname);
    }

    public function testNonEmptyValuesAreIgnored()
    {
        // Save as value
        $post = NullablePost::create(['author_nickname' => 'Joe']);
        $this->assertEquals('Joe', $post->author_nickname);

        // Save as zero integer
        $post->author_nickname = 0;
        $post->save();
        $this->assertNotNull($post->author_nickname);
        $this->assertEquals(0, $post->author_nickname);

        // Save as zero float
        $post->author_nickname = 0.0;
        $post->save();
        $this->assertNotNull($post->author_nickname);
        $this->assertEquals(0.0, $post->author_nickname);

        // Save as zero string
        $post->author_nickname = '0';
        $post->save();
        $this->assertNotNull($post->author_nickname);
        $this->assertEquals('0', $post->author_nickname);

        // Save as false
        $post->author_nickname = false;
        $post->save();
        $this->assertNotNull($post->author_nickname);
        $this->assertEquals(false, $post->author_nickname);
    }
}
