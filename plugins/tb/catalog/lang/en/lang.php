<?php

return [
    'plugin' => [
        'name' => 'Catalog',
        'description' => 'Manage a catalog of products',
    ],
    'permissions' => [
        'some_permission' => 'Some permission',
    ],
    'models' => [
        'general' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'pictures' => 'Pictures',
            'picture' => 'Picture',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
        'product' => [
            'label' => 'Product',
            'label_plural' => 'Products',
            'base_price' => 'Base price'
        ],
    ],
    'menu_item' => [
        'catalog' => 'Catalog',
        'products' => 'Products',
    ]
];