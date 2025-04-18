<?php namespace Winter\Tester\Components;

use Cms\Classes\ComponentBase;

class Post extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Blog PostList Dummy Component',
            'description' => 'Displays a blog post.'
        ];
    }

    public function defineProperties()
    {
        return [
            'show-featured' => [
                 'description' => 'Display the post featured image or not',
                 'default' => true
            ]
        ];
    }
}
