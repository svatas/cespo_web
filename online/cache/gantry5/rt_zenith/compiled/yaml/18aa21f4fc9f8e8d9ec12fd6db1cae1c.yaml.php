<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/latestnews.yaml',
    'modified' => 1600161768,
    'data' => [
        'name' => 'Latest News',
        'description' => 'Display latest news.',
        'type' => 'particle',
        'icon' => 'fa-newspaper-o',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_settings' => [
                            'label' => 'Settings',
                            'overridable' => false,
                            'fields' => [
                                'source' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Content Source',
                                    'description' => 'Choose if the content should be loaded from the platform or particle itself.',
                                    'default' => 'particle',
                                    'options' => [
                                        'particle' => 'Particle',
                                        'grav' => 'Grav'
                                    ]
                                ],
                                'title' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Customize the title text.',
                                    'placeholder' => 'Enter title'
                                ],
                                'class' => [
                                    'overridable' => false,
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ],
                                'cols' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Grid Column',
                                    'description' => 'Select the grid column amount',
                                    'placeholder' => 'Select...',
                                    'default' => 'cols-4',
                                    'options' => [
                                        'cols-2' => '2 Columns',
                                        'cols-3' => '3 Columns',
                                        'cols-4' => '4 Columns',
                                        'cols-5' => '5 Columns'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_collection' => [
                            'label' => 'Particle Items',
                            'overridable' => false,
                            'fields' => [
                                'cases' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'News',
                                    'description' => 'Create case studies.',
                                    'value' => 'title',
                                    'ajax' => true,
                                    'overridable' => false,
                                    'fields' => [
                                        '.layout' => [
                                            'type' => 'select.select',
                                            'label' => 'Layout',
                                            'description' => 'Select desired layout.',
                                            'placeholder' => 'Select...',
                                            'default' => 'text',
                                            'options' => [
                                                'photo' => 'Photo',
                                                'text' => 'Text'
                                            ]
                                        ],
                                        '.image' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Image',
                                            'description' => 'Select desired image.'
                                        ],
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title',
                                            'description' => 'Enter Item title'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea.textarea',
                                            'label' => 'Description',
                                            'description' => 'Enter case description. Only for Alternative layouts.'
                                        ],
                                        '.date' => [
                                            'type' => 'input.date',
                                            'label' => 'News Date',
                                            'description' => 'Pick News Date.',
                                            'placeholder' => 'Select...',
                                            'formats' => 'F d, Y'
                                        ],
                                        '.url' => [
                                            'type' => 'input.text',
                                            'label' => 'Url',
                                            'description' => 'Customize case url.'
                                        ],
                                        '.target' => [
                                            'type' => 'select.selectize',
                                            'label' => 'Target',
                                            'description' => 'Target browser window when item is clicked.',
                                            'placeholder' => 'Select...',
                                            'default' => '_self',
                                            'options' => [
                                                '_self' => 'Self',
                                                '_blank' => 'New'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        '_tab_articles' => [
                            'label' => 'Pages',
                            'overridable' => false,
                            'fields' => [
                                'article.filter.categories' => [
                                    'type' => 'input.selectize',
                                    'label' => 'Categories',
                                    'description' => 'Select the categories the content should be taken from.',
                                    'overridable' => false
                                ],
                                'article.limit.total' => [
                                    'type' => 'input.text',
                                    'label' => 'Number of Pages',
                                    'description' => 'Enter the maximum number of content to display.',
                                    'default' => 5,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.limit.start' => [
                                    'type' => 'input.text',
                                    'label' => 'Start From',
                                    'description' => 'Enter offset specifying the first article to return. The default is \'0\' (the first content item).',
                                    'default' => 0,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.sort.orderby' => [
                                    'type' => 'select.select',
                                    'label' => 'Order By',
                                    'description' => 'Select how the content should be ordered by.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default Ordering',
                                        'date' => 'Date',
                                        'publish_date' => 'Publish Date',
                                        'unpublish_date' => 'Unpublish Date',
                                        'modified' => 'Last Modified Date',
                                        'title' => 'Title',
                                        'slug' => 'Slug'
                                    ],
                                    'overridable' => false
                                ],
                                'article.sort.ordering' => [
                                    'type' => 'select.select',
                                    'label' => 'Ordering Direction',
                                    'description' => 'Select the direction the content should be ordered by.',
                                    'default' => 'asc',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
                                    ],
                                    'overridable' => false
                                ]
                            ]
                        ],
                        '_tab_display' => [
                            'label' => 'Pages Display',
                            'overridable' => false,
                            'fields' => [
                                'article.display.image.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Image',
                                    'description' => 'Select if and what image of the content should be shown.',
                                    'options' => [
                                        'intro' => 'Intro',
                                        'full' => 'Full',
                                        '' => 'None'
                                    ]
                                ],
                                'article.display.text.type' => [
                                    'type' => 'select.select',
                                    'label' => 'Article Text',
                                    'description' => 'Select if and how the content text should be shown.',
                                    'options' => [
                                        'intro' => 'Introduction',
                                        'full' => 'Full Article',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.text.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Text Limit',
                                    'description' => 'Type in the number of characters the content text should be limited to.',
                                    'pattern' => '\\d+'
                                ],
                                'article.display.text.formatting' => [
                                    'type' => 'select.select',
                                    'label' => 'Text Formatting',
                                    'description' => 'Select the formatting you want to use to display the content text.',
                                    'options' => [
                                        'text' => 'Plain Text',
                                        'html' => 'HTML'
                                    ]
                                ],
                                'article.display.date.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Date',
                                    'description' => 'Select if the content date should be shown.',
                                    'options' => [
                                        'created' => 'Show Created Date',
                                        'published' => 'Show Published Date',
                                        'modified' => 'Show Modified Date',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.date.format' => [
                                    'type' => 'select.date',
                                    'label' => 'Date Format',
                                    'description' => 'Select preferred date format. Leave empty not to display a date.',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        'l, F d, Y' => 'Date1',
                                        'l, d F' => 'Date2',
                                        'D, d F' => 'Date3',
                                        'F d' => 'Date4',
                                        'd F' => 'Date5',
                                        'd M' => 'Date6',
                                        'D, M d, Y' => 'Date7',
                                        'D, M d, y' => 'Date8',
                                        'l' => 'Date9',
                                        'l j F Y' => 'Date10',
                                        'j F Y' => 'Date11',
                                        'F d, Y' => 'Date12'
                                    ]
                                ],
                                'article.display.category.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Category',
                                    'description' => 'Select if the category should be shown.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.title.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Title',
                                    'description' => 'Select if the content title should be shown.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.title.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Title Limit',
                                    'description' => 'Enter the maximum number of characters the content title should be limited to.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}'
                                ],
                                'article.display.read_more.enabled' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Link',
                                    'description' => 'Select if the link should be shown.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.read_more.target' => [
                                    'overridable' => false,
                                    'type' => 'select.selectize',
                                    'label' => 'Target',
                                    'description' => 'Target browser window when item is clicked.',
                                    'placeholder' => 'Select...',
                                    'default' => '_self',
                                    'options' => [
                                        '_self' => 'Self',
                                        '_blank' => 'New Window'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
