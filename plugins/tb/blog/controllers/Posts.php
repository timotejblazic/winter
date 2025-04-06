<?php namespace Tb\Blog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Posts Backend Controller
 */
class Posts extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    /**
     * @var array Permissions required to view this page.
     */
    protected $requiredPermissions = [
        'tb.blog.posts.manage_all',
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Tb.Blog', 'blog', 'posts');
    }
}
