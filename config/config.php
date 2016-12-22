<?php
return [
    'class_url' => '',
    'info_url' => '',

    // Cache lifetime.
    'cache_minutes' => 2,
    // 是否刷新缓存.
    'refresh_cache' => 0,

    // Api service host.
    'api_base_url' => '',

    // Models alias map to class.
    'models' => [
        'content' => SuperView\Models\ContentModel::class,
        'category' => SuperView\Models\CategoryModel::class,
        'topic' => SuperView\Models\TopicModel::class,
        'tag' => SuperView\Models\TagModel::class,
        'utils' => SuperView\Models\UtilsModel::class,
    ],

    'dals' => [
        'content' => SuperView\Dal\Api\Content::class,
        'category' => SuperView\Dal\Api\Category::class,
        'topic' => SuperView\Dal\Api\Topic::class,
        'tag' => SuperView\Dal\Api\Tag::class,
        'utils' => SuperView\Dal\Api\Utils::class,
    ],

    'pagination' => [
        'layout' => '',
        'total' => '',
        'previous' => '',
        'links' => '',
        'link_active' => '',
        'next' => '',
        'dots' => '',
    ]
];
