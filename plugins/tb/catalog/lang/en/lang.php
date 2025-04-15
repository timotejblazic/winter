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
            'base_price' => 'Base price',
        ],
        'product_variant' => [
            'label' => 'Product variant',
            'label_plural' => 'Product variants',
        ],
        'brand' => [
            'label' => 'Brand',
            'label_plural' => 'Brands',
        ],
    ],
];
