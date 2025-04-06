<?php namespace Tb\Blog\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Redirect;
use Tb\Blog\Models\Post;

class PostSingle extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Blog Post',
            'description' => 'Displays a single blog post'
        ];
    }

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Blog Slug',
                'description' => 'URL slug of the post',
                'default' => '{{ :slug }}',
                'type' => 'string',
            ]
        ];
    }

    public function onRun()
    {
        $this->page['post'] = $this->loadPost();
    }

    protected function loadPost()
    {
        return Post::where('slug', '=', $this->property('slug'))->first();
    }
}
