<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/testimonials.yaml',
    'modified' => 1600161769,
    'data' => [
        'name' => 'Testimonials',
        'description' => 'Display testimonials.',
        'type' => 'particle',
        'icon' => 'fa-users',
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
                                'class' => [
                                    'overridable' => false,
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ],
                                'title' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Customize the title text.',
                                    'placeholder' => 'Enter title'
                                ],
                                'subtitle' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Subtitle',
                                    'description' => 'Customize the subtitle text.',
                                    'placeholder' => 'Enter subtitle'
                                ],
                                'autoplay' => [
                                    'type' => 'select.select',
                                    'label' => 'Autoplay',
                                    'description' => 'Decide if you want your slideshow to autoplay or not.',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'autoplayTimeout' => [
                                    'type' => 'input.number',
                                    'label' => 'Autoplay Timeout',
                                    'description' => 'The time between each auto transition',
                                    'default' => 8000
                                ],
                                'loop' => [
                                    'type' => 'select.select',
                                    'label' => 'Loop',
                                    'description' => 'Decide if you want your slideshow to loop or not.',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'speed' => [
                                    'type' => 'input.number',
                                    'label' => 'Speed',
                                    'description' => 'Transition speed',
                                    'default' => 800
                                ]
                            ]
                        ],
                        '_tab_collection' => [
                            'label' => 'Particle Items',
                            'overridable' => false,
                            'fields' => [
                                'testimony' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Testomonial',
                                    'description' => 'Create testimonial.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.content' => [
                                            'type' => 'input.textarea',
                                            'label' => 'Testimonial Content',
                                            'description' => 'Add Testimony Content'
                                        ],
                                        '.author' => [
                                            'type' => 'input.text',
                                            'label' => 'Testimony Author'
                                        ],
                                        '.position' => [
                                            'type' => 'input.text',
                                            'label' => 'Person Position'
                                        ],
                                        '.photo' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Person Photo',
                                            'description' => 'Pick desired photo.'
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
                                'article.display.author.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Author',
                                    'description' => 'Select if the article author should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.link.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Button Link',
                                    'description' => 'Select if the button should link to the page.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.link.label' => [
                                    'type' => 'input.text',
                                    'label' => 'Button Label',
                                    'description' => 'Type in the label for the button.',
                                    'placeholder' => 'Explore Now'
                                ],
                                'article.display.link.target' => [
                                    'type' => 'select.selectize',
                                    'label' => 'Button Target',
                                    'description' => 'Target browser window when the button is clicked.',
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
