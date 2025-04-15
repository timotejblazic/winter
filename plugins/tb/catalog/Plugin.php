<?php namespace Tb\Catalog;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name'        => 'tb.catalog::lang.plugin.name',
            'description' => 'tb.catalog::lang.plugin.description',
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

    public function registerComponents(): array
    {
        return []; // Remove this line to activate

        return [
            \Tb\Catalog\Components\MyComponent::class => 'myComponent',
        ];
    }

    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'tb.catalog.some_permission' => [
                'tab'   => 'tb.catalog::lang.plugin.name',
                'label' => 'tb.catalog::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    public function registerNavigation(): array
    {
        return [
            'catalog' => [
                'label'       => 'tb.catalog::lang.plugin.name',
                'url'         => Backend::url('tb/catalog/products'),
                'icon'        => 'icon-cubes',
                'permissions' => ['tb.catalog.*'],
                'order'       => 500,
                'sideMenu'    => [
                    'posts' => [
                        'label'       => 'tb.catalog::lang.menu_item.products',
                        'url'         => Backend::url('tb/catalog/products'),
                        'icon'        => 'icon-cubes',
                        'permissions' => ['tb.catalog.*'],
                        'order'       => 500,
                    ],
                ]
            ],
        ];
    }
}
