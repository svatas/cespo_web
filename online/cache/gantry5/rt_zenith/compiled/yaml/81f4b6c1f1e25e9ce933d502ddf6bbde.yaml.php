<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/swiper.yaml',
    'modified' => 1600161769,
    'data' => [
        'name' => 'Swiper',
        'description' => 'Swiper JS',
        'type' => 'particle',
        'icon' => 'fa-sliders',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_settings' => [
                            'label' => 'Settings',
                            'overridable' => false,
                            'fields' => [
                                'class' => [
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ],
                                'source' => [
                                    'type' => 'select.select',
                                    'label' => 'Content Source',
                                    'description' => 'Choose if the content should be loaded from the platform or particle itself.',
                                    'default' => 'particle',
                                    'options' => [
                                        'particle' => 'Particle',
                                        'grav' => 'Grav'
                                    ]
                                ],
                                'image' => [
                                    'type' => 'select.select',
                                    'label' => 'Image',
                                    'description' => 'Choose if the image should be a background or img tag.',
                                    'default' => 'background',
                                    'options' => [
                                        'background' => 'Background',
                                        'img' => 'IMG'
                                    ]
                                ],
                                'height' => [
                                    'type' => 'input.text',
                                    'label' => 'Slide Height',
                                    'description' => 'Set minimal image height',
                                    'placeholder' => '70vh',
                                    'default' => '70vh',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                                ],
                                'heightMobile' => [
                                    'type' => 'input.text',
                                    'label' => 'Slide Height (Mobile)',
                                    'description' => 'Set minimal image height in mobile',
                                    'placeholder' => '400px',
                                    'default' => '400px',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                                ],
                                'nav' => [
                                    'type' => 'select.select',
                                    'label' => 'Prev / Next',
                                    'description' => 'Enable or disable the Prev / Next navigation. Arrows will not appear unless they are actually required (i.e. more items than currently visible).',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'pagination' => [
                                    'type' => 'select.select',
                                    'label' => 'Pagination',
                                    'description' => 'Enable or disable the pagination.',
                                    'default' => 'bullets',
                                    'options' => [
                                        'bullets' => 'Dots',
                                        'progressbar' => 'Progress Bar',
                                        '' => 'None'
                                    ]
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
                                ],
                                'slides_linkable' => [
                                    'type' => 'select.select',
                                    'label' => 'Slides Linkable',
                                    'description' => 'Decide if you want to slides to be linkable.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'touchmove' => [
                                    'type' => 'select.select',
                                    'label' => 'Touch Move',
                                    'description' => 'Decide if you want to be able to move slides using touch.',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'mobile' => 'Mobile Only',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'overlaycolor' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Overlay Color',
                                    'default' => 'rgba(9, 13, 15, 0.5)'
                                ],
                                'direction' => [
                                    'type' => 'select.select',
                                    'label' => 'Direction',
                                    'description' => 'Slides move vertically or horizontally.',
                                    'default' => 'horizontal',
                                    'options' => [
                                        'vertical' => 'Vertical',
                                        'horizontal' => 'Horizontal'
                                    ]
                                ],
                                'effect' => [
                                    'type' => 'select.select',
                                    'label' => 'Effect',
                                    'description' => 'Pick slideshow effect.',
                                    'default' => 'slide',
                                    'options' => [
                                        'slide' => 'Slide',
                                        'fade' => 'Fade',
                                        'coverflow' => 'Cover Flow',
                                        'flip' => 'Flip'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_collection' => [
                            'label' => 'Items',
                            'overridable' => false,
                            'fields' => [
                                'items' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Slides',
                                    'description' => 'Create slideshow items.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'input.text',
                                            'label' => 'Title',
                                            'description' => 'Enter slide title'
                                        ],
                                        '.class' => [
                                            'type' => 'input.selectize',
                                            'label' => 'CSS Classes',
                                            'description' => 'CSS class name for the item.'
                                        ],
                                        '.image' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Image',
                                            'description' => 'Select image for slider',
                                            'placeholder' => 'Pick an image'
                                        ],
                                        '.imageMobile' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Mobile Image',
                                            'description' => 'Select a mobile image for slider',
                                            'placeholder' => 'Pick an image'
                                        ],
                                        '.bgcolor' => [
                                            'type' => 'input.colorpicker',
                                            'label' => 'BG Color',
                                            'description' => 'Select background color for item if not using image / video'
                                        ],
                                        '.kb' => [
                                            'type' => 'select.select',
                                            'label' => 'Animation',
                                            'description' => 'Background Image Animation',
                                            'default' => '',
                                            'options' => [
                                                '' => 'None',
                                                'kenburns' => 'Center',
                                                'kenburnsLeft' => 'Left',
                                                'kenburnsRight' => 'Right',
                                                'kenburnsDown' => 'Down',
                                                'kenburnsDownLeft' => 'Down Left',
                                                'kenburnsDownRight' => 'Down Right',
                                                'kenburnsUp' => 'Up',
                                                'kenburnsUpLeft' => 'Up Left',
                                                'kenburnsUpRight' => 'Up Right'
                                            ]
                                        ],
                                        '.duration' => [
                                            'type' => 'input.number',
                                            'label' => 'Duration',
                                            'default' => 7000,
                                            'description' => 'Duration of animation (ms)'
                                        ],
                                        '.video' => [
                                            'type' => 'input.videopicker',
                                            'label' => 'Video Background',
                                            'description' => 'Select desired video or enter external URL.'
                                        ],
                                        '.title' => [
                                            'type' => 'type.text',
                                            'label' => 'Title',
                                            'description' => 'Enter Slide Top Title'
                                        ],
                                        '.text' => [
                                            'type' => 'type.text',
                                            'label' => 'Text',
                                            'description' => 'Enter Slide Main Title'
                                        ],
                                        '.thumbClass' => [
                                            'type' => 'input.selectize',
                                            'label' => 'Thumb Class',
                                            'description' => 'Enter Thumb Title'
                                        ],
                                        '.thumb_title' => [
                                            'type' => 'type.text',
                                            'label' => 'Thumb Title',
                                            'description' => 'Enter Thumb Title'
                                        ],
                                        '.imageThumb' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Thumb Image',
                                            'description' => 'Select a thumb image for slider',
                                            'placeholder' => 'Pick an image'
                                        ],
                                        '.button_text' => [
                                            'type' => 'type.text',
                                            'label' => 'Button Text',
                                            'default' => 'Explore Now'
                                        ],
                                        '.button_link' => [
                                            'type' => 'input.text',
                                            'label' => 'Link',
                                            'default' => '#'
                                        ],
                                        '.linktarget' => [
                                            'type' => 'select.selectize',
                                            'label' => 'Link Target',
                                            'description' => 'Target browser window when the title is clicked.',
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
                        ],
                        '_tab_slides' => [
                            'label' => 'Slides',
                            'overridable' => false,
                            'fields' => [
                                'effectinfo' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert',
                                    'content' => 'Slide / Cover Flow Effect Only for Multiple Slides and Groups'
                                ],
                                'largedesktopinfo' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Large Desktop'
                                ],
                                'largedesktopslides' => [
                                    'type' => 'input.number',
                                    'label' => 'Slides Per View',
                                    'description' => 'Number of slides per view',
                                    'default' => 1,
                                    'min' => 1
                                ],
                                'largedesktopgroup' => [
                                    'type' => 'input.number',
                                    'label' => 'Slides Per Group',
                                    'description' => 'Number of slides per transition',
                                    'default' => 1,
                                    'min' => 1
                                ],
                                'largedesktopspace' => [
                                    'type' => 'input.number',
                                    'label' => 'Space Between',
                                    'description' => 'Amount of space between each thumb (px)',
                                    'default' => 0,
                                    'min' => 0
                                ],
                                'desktopinfo' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Desktop'
                                ],
                                'desktopslides' => [
                                    'type' => 'input.number',
                                    'label' => 'Slides Per View',
                                    'description' => 'Number of slides per view',
                                    'default' => 1,
                                    'min' => 1
                                ],
                                'desktopgroup' => [
                                    'type' => 'input.number',
                                    'label' => 'Slides Per Group',
                                    'description' => 'Number of slides per transition',
                                    'default' => 1,
                                    'min' => 1
                                ],
                                'desktopspace' => [
                                    'type' => 'input.number',
                                    'label' => 'Space Between',
                                    'description' => 'Amount of space between each thumb (px)',
                                    'default' => 0,
                                    'min' => 0
                                ],
                                'tabletinfo' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Tablet'
                                ],
                                'tabletslides' => [
                                    'type' => 'input.number',
                                    'label' => 'Slides Per View',
                                    'description' => 'Number of slides per view',
                                    'default' => 1,
                                    'min' => 1
                                ],
                                'tabletgroup' => [
                                    'type' => 'input.number',
                                    'label' => 'Slides Per Group',
                                    'description' => 'Number of slides per transition',
                                    'default' => 1,
                                    'min' => 1
                                ],
                                'tabletspace' => [
                                    'type' => 'input.number',
                                    'label' => 'Space Between',
                                    'description' => 'Amount of space between each thumb (px)',
                                    'default' => 0,
                                    'min' => 0
                                ],
                                'mobileinfo' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Mobile'
                                ],
                                'mobileslides' => [
                                    'type' => 'input.number',
                                    'label' => 'Slides Per View',
                                    'description' => 'Number of slides per view',
                                    'default' => 1,
                                    'min' => 1
                                ],
                                'mobilegroup' => [
                                    'type' => 'input.number',
                                    'label' => 'Slides Per Group',
                                    'description' => 'Number of slides per transition',
                                    'default' => 1,
                                    'min' => 1
                                ],
                                'mobilespace' => [
                                    'type' => 'input.number',
                                    'label' => 'Space Between',
                                    'description' => 'Amount of space between each thumb (px)',
                                    'default' => 0,
                                    'min' => 0
                                ]
                            ]
                        ],
                        '_tab_thumbs' => [
                            'label' => 'Thumbs',
                            'overridable' => false,
                            'fields' => [
                                'thumbs' => [
                                    'type' => 'select.select',
                                    'label' => 'Thumbs',
                                    'description' => 'Enable or disable the thumbnails.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'thumbsHeight' => [
                                    'type' => 'input.text',
                                    'label' => 'Thumbs Height',
                                    'description' => 'Set thumbs height',
                                    'placeholder' => '15vh',
                                    'default' => '15vh',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                                ],
                                'thumbsMobileHeight' => [
                                    'type' => 'input.text',
                                    'label' => 'Thumbs Height (Mobile)',
                                    'description' => 'Set thumbs height in mobile',
                                    'placeholder' => '150px',
                                    'default' => '150px',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                                ],
                                'thumbsnav' => [
                                    'type' => 'select.select',
                                    'label' => 'Thumbs Nav',
                                    'description' => 'Enable or disable the Prev / Next navigation for Thumbs.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'thumbslayout' => [
                                    'type' => 'select.select',
                                    'label' => 'Thumbs Layout',
                                    'description' => 'Top or Bottom',
                                    'default' => 'bottom',
                                    'options' => [
                                        'top' => 'Top',
                                        'bottom' => 'Bottom'
                                    ]
                                ],
                                'largedesktopinfo' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Large Desktop'
                                ],
                                'largedesktopthumbs' => [
                                    'type' => 'input.number',
                                    'label' => 'Thumbs Per View',
                                    'description' => 'Number of thumbs per view',
                                    'default' => 5,
                                    'min' => 1
                                ],
                                'largedesktopthumbspace' => [
                                    'type' => 'input.number',
                                    'label' => 'Space Between',
                                    'description' => 'Amount of space between each thumb (px)',
                                    'default' => 50,
                                    'min' => 0
                                ],
                                'desktopinfo' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Desktop'
                                ],
                                'desktopthumbs' => [
                                    'type' => 'input.number',
                                    'label' => 'Thumbs Per View',
                                    'description' => 'Number of thumbs per view',
                                    'default' => 4,
                                    'min' => 1
                                ],
                                'desktopthumbspace' => [
                                    'type' => 'input.number',
                                    'label' => 'Space Between',
                                    'description' => 'Amount of space between each thumb (px)',
                                    'default' => 40,
                                    'min' => 0
                                ],
                                'tabletinfo' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Tablet'
                                ],
                                'tabletthumbs' => [
                                    'type' => 'input.number',
                                    'label' => 'Thumbs Per View',
                                    'description' => 'Number of thumbs per view',
                                    'default' => 3,
                                    'min' => 1
                                ],
                                'tabletthumbspace' => [
                                    'type' => 'input.number',
                                    'label' => 'Space Between',
                                    'description' => 'Amount of space between each thumb (px)',
                                    'default' => 30,
                                    'min' => 0
                                ],
                                'mobileinfo' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Mobile'
                                ],
                                'mobilethumbs' => [
                                    'type' => 'input.number',
                                    'label' => 'Thumbs Per View',
                                    'description' => 'Number of thumbs per view',
                                    'default' => 2,
                                    'min' => 1
                                ],
                                'mobilethumbspace' => [
                                    'type' => 'input.number',
                                    'label' => 'Space Between',
                                    'description' => 'Amount of space between each thumb (px)',
                                    'default' => 20,
                                    'min' => 0
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
                                    'placeholder' => 'Read More'
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
