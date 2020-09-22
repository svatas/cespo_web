<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/pages/04.informace-rady/blog_list.md',
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
            ]
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
    url_taxonomy_filters: true',
        'markdown' => ''
    ]
];
