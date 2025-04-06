<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'No description provided yet...',
    ],
    'permissions' => [
        'some_permission' => 'Some permission',
    ],
    'models' => [
        'general' => [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
        'post' => [
            'label' => 'PostList',
            'label_plural' => 'Posts',
        ],
        'category' => [
            'label' => 'Category',
            'label_plural' => 'Categories',
        ],
    ],
];
