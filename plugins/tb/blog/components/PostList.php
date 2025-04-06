<?php namespace Tb\Blog\Components;

use Cms\Classes\ComponentBase;
use Tb\Blog\Models\Category;
use Tb\Blog\Models\Post;

class PostList extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Blog PostList',
            'description' => 'Displays a list of posts'
        ];
    }

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties()
    {
        return [
            'limit' => [
                'title' => 'Posts limit',
                'description' => 'Limit number of posts to show',
                'default' => 5,
            ],
        ];
    }

    public function onRun()
    {
        $this->page['posts'] = $this->loadPosts();
        $this->page['category'] = $this->loadCategory();
    }

    protected function loadCategory()
    {
        $slug = get('category');

        if (!$slug) {
            return null;
        }

        return Category::where('slug', $slug)->first();
    }

    protected function loadPosts()
    {
        if ($category = $this->loadCategory()) {
            return Post::where('category_id', $category->id)->get();
        }

        return Post::take($this->property('limit'))->get();
    }
}
