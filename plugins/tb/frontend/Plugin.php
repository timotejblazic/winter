<?php

namespace Tb\Frontend;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * frontend Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'tb.frontend::lang.plugin.name',
            'description' => 'tb.frontend::lang.plugin.description',
            'author'      => 'tb',
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

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return [
            \Tb\Frontend\Components\Header::class => 'tbHeader',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'tb.frontend.some_permission' => [
                'tab' => 'tb.frontend::lang.plugin.name',
                'label' => 'tb.frontend::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return []; // Remove this line to activate

        return [
            'frontend' => [
                'label'       => 'tb.frontend::lang.plugin.name',
                'url'         => Backend::url('tb/frontend/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['tb.frontend.*'],
                'order'       => 500,
            ],
        ];
    }
}
