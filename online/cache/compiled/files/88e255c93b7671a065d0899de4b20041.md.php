<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/pages/03.novinky/blog_list.md',
    'modified' => 1600161747,
    'data' => [
        'header' => [
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'leading' => 0,
                'columns' => 2,
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'show_date' => false,
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'published' => true,
            'title' => 'Co je nového?'
        ],
        'frontmatter' => 'content:
    items:
        - \'@self.children\'
    leading: 0
    columns: 2
    limit: 5
    order:
        by: date
        dir: desc
    show_date: false
    pagination: true
    url_taxonomy_filters: true
published: true
title: \'Co je nového?\'',
        'markdown' => ''
    ]
];
