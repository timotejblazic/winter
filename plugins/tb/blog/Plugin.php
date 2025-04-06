<?php

namespace Tb\Blog;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * Blog Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'tb.blog::lang.plugin.name',
            'description' => 'tb.blog::lang.plugin.description',
            'author'      => 'Tb',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {

    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'dd' => function ($object) {
                    return dd($object);
                }
            ]
        ];
    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return [
            \Tb\Blog\Components\PostList::class => 'postList',
            \Tb\Blog\Components\PostSingle::class => 'postSingle',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'tb.blog.some_permission' => [
                'tab' => 'tb.blog::lang.plugin.name',
                'label' => 'tb.blog::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
//        return []; // Remove this line to activate

        return [
            'blog' => [
                'label'       => 'tb.blog::lang.plugin.name',
                'url'         => Backend::url('tb/blog/posts'),
                'icon'        => 'icon-pencil',
                'permissions' => ['tb.blog.*'],
                'order'       => 500,
                'sideMenu' => [
                    'posts' => [
                        'label'       => 'Posts',
                        'url' => Backend::url('tb/blog/posts'),
                        'icon' => 'icon-sitemap',
                        'permissions' => ['tb.blog.*'],
                        'order'       => 500,
                    ],
                    'categories' => [
                        'label'       => 'Catogires',
                        'url' => Backend::url('tb/blog/categories'),
                        'icon' => 'icon-sitemap',
                        'permissions' => ['tb.blog.*'],
                        'order'       => 600,
                    ]
                ]
            ],
        ];
    }
}
