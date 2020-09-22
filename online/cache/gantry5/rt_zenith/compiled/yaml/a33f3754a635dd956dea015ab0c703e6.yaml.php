<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/data/gantry5/themes/rt_zenith/config/home/layout.yaml',
    'modified' => 1600164243,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'home_-_particles',
            'timestamp' => 1554457007
        ],
        'layout' => [
            '/container-body/' => [
                0 => [
                    0 => [
                        'bodysidebar 20' => [
                            
                        ]
                    ],
                    1 => [
                        '/top/ 80' => [
                            
                        ],
                        '/navigation/' => [
                            
                        ],
                        '/slideshow/' => [
                            0 => [
                                0 => 'slideshow-9108'
                            ]
                        ],
                        '/header/' => [
                            0 => [
                                0 => 'blockcontent-6209'
                            ]
                        ],
                        '/above/' => [
                            
                        ],
                        '/feature/' => [
                            
                        ],
                        '/extended/' => [
                            0 => [
                                0 => 'timeline-2153'
                            ]
                        ],
                        '/showcase/' => [
                            
                        ],
                        '/utility/' => [
                            
                        ],
                        '/container-main/' => [
                            0 => [
                                0 => [
                                    'sidebar 20' => [
                                        
                                    ]
                                ],
                                1 => [
                                    'mainbar 60' => [
                                        
                                    ]
                                ],
                                2 => [
                                    'aside 20' => [
                                        
                                    ]
                                ]
                            ]
                        ],
                        '/expanded/' => [
                            0 => [
                                0 => 'photocollage-6382'
                            ]
                        ],
                        '/extension/' => [
                            0 => [
                                0 => 'logos-5614'
                            ]
                        ],
                        '/bottom/' => [
                            0 => [
                                0 => 'system-content-5489 50',
                                1 => 'promo-8286 50'
                            ]
                        ],
                        '/footer/' => [
                            
                        ],
                        '/copyright/' => [
                            
                        ]
                    ]
                ]
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'bodysidebar' => [
                'type' => 'section',
                'title' => 'Body Sidebar',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'top' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-horizontal-paddings'
                ],
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children'
                    ]
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => '',
                    'variations' => 'section-horizontal-paddings'
                ],
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children'
                    ]
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => 'fp-slideshow',
                    'variations' => 'nomarginall nopaddingall'
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'fp-header',
                    'variations' => 'nomarginall nopaddingall'
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'fp-above',
                    'variations' => 'nomarginall nopaddingall'
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => '',
                    'variations' => 'nomarginall medpaddingleft medpaddingright smallpaddingbottom smallpaddingtop'
                ]
            ],
            'extended' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '2',
                    'class' => '',
                    'variations' => 'fp-showcase'
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'attributes' => [
                    'class' => ''
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'title' => 'Main',
                'attributes' => [
                    'class' => '',
                    'variations' => 'section-horizontal-paddings'
                ]
            ],
            'aside' => [
                'attributes' => [
                    'class' => ''
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '2',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => ''
                ],
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children'
                    ]
                ]
            ],
            'copyright' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ],
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children'
                    ]
                ]
            ],
            'container-body' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'slideshow-9108' => [
                'attributes' => [
                    'source' => 'particle',
                    'height' => '',
                    'nav' => 'enabled',
                    'dots' => 'enabled',
                    'autoplay' => 'enabled',
                    'autoplayTimeout' => '5000',
                    'loop' => 'enabled',
                    'speed' => '800',
                    'touchmove' => 'disabled',
                    'overlay' => 'enabled',
                    'direction' => 'vertical',
                    'effect' => 'coverflow',
                    'items' => [
                        0 => [
                            'class' => '',
                            'image' => 'gantry-media://home/slideshow/hand-4806608_1280.jpg',
                            'bg_horizontal' => 'center',
                            'bg_vertical' => 'center',
                            'top_title' => 'Sociální služby pro sluchově postižené.',
                            'main_title' => 'CESPO, o.p.s.',
                            'button_text' => '',
                            'button_link' => '#',
                            'linktarget' => '_self',
                            'title' => 'sociální služby pro sluchově postižené'
                        ],
                        1 => [
                            'class' => '',
                            'image' => 'gantry-media://home/slideshow/hands-2847508_1280.jpg',
                            'bg_horizontal' => 'center',
                            'bg_vertical' => 'center',
                            'top_title' => 'Organizace volnočasových aktivit.',
                            'main_title' => 'CESPO, o.p.s.',
                            'button_text' => '',
                            'button_link' => '#',
                            'linktarget' => '_self',
                            'title' => 'organizace volnočasových aktivit'
                        ],
                        2 => [
                            'class' => '',
                            'image' => 'gantry-media://home/slideshow/creativity-819371_1280.jpg',
                            'bg_horizontal' => 'center',
                            'bg_vertical' => 'center',
                            'top_title' => 'Tvorba vzdělávacích programů. ',
                            'main_title' => 'CESPO, o.p.s.',
                            'button_text' => '',
                            'button_link' => '#',
                            'linktarget' => '_self',
                            'title' => 'tvorba vzdělávacích programů'
                        ],
                        3 => [
                            'class' => '',
                            'image' => 'gantry-media://home/slideshow/classroom-1699745_1280.jpg',
                            'bg_horizontal' => 'center',
                            'bg_vertical' => 'center',
                            'top_title' => 'Přednášková a lektorská činnost.',
                            'main_title' => 'CESPO, o.p.s.',
                            'button_text' => '',
                            'button_link' => '#',
                            'linktarget' => '_self',
                            'title' => 'přednášková a lektorská činnost'
                        ],
                        4 => [
                            'class' => '',
                            'image' => 'gantry-media://home/slideshow/massage-2768833_1280.jpg',
                            'bg_horizontal' => 'center',
                            'bg_vertical' => 'center',
                            'top_title' => 'Masérské služby pro veřejnost.',
                            'main_title' => 'CESPO, o.p.s.',
                            'button_text' => '',
                            'button_link' => '#',
                            'linktarget' => '_self',
                            'title' => 'masérské služby pro veřejnost'
                        ],
                        5 => [
                            'class' => '',
                            'image' => 'gantry-media://home/slideshow/fish-1953059_1280.jpg',
                            'bg_horizontal' => 'center',
                            'bg_vertical' => 'center',
                            'top_title' => 'Reklamní a tiskové služby.',
                            'main_title' => 'CESPO, o.p.s.',
                            'button_text' => '',
                            'button_link' => '#',
                            'linktarget' => '_self',
                            'title' => 'reklamní a tiskové služby'
                        ]
                    ],
                    'article' => [
                        'filter' => [
                            'categories' => ''
                        ],
                        'limit' => [
                            'total' => '5',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'default',
                            'ordering' => 'asc'
                        ],
                        'display' => [
                            'image' => [
                                'enabled' => 'intro'
                            ],
                            'title' => [
                                'enabled' => 'show',
                                'limit' => ''
                            ],
                            'link' => [
                                'enabled' => 'show',
                                'label' => '',
                                'target' => '_self'
                            ]
                        ]
                    ]
                ]
            ],
            'blockcontent-6209' => [
                'title' => 'Block Content',
                'attributes' => [
                    'source' => 'particle',
                    'class' => '',
                    'title' => '',
                    'icon' => '',
                    'image' => '',
                    'headline' => '',
                    'description' => '',
                    'linktext' => '',
                    'link' => '',
                    'linkclass' => '',
                    'linktarget' => '_self',
                    'subcontents' => [
                        0 => [
                            'accent' => 'accent3',
                            'icon' => 'fa fa-drivers-license-o',
                            'img' => '',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => 'Kde a jak nás můžete kontaktovat?',
                            'description' => '',
                            'class' => '',
                            'button' => 'Více podrobností',
                            'buttonlink' => 'o-cespo/kontakty',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Kontakty'
                        ],
                        1 => [
                            'accent' => 'accent2',
                            'icon' => 'fa fa-newspaper-o',
                            'img' => '',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => 'Novinky z dění kolem našeho centra.',
                            'description' => '',
                            'class' => '',
                            'button' => 'Čtěte zde',
                            'buttonlink' => 'novinky',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Co je nového?'
                        ],
                        2 => [
                            'accent' => 'accent1',
                            'icon' => 'fa fa-info-circle',
                            'img' => '',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => 'Potřebujete informace nebo s něčím poradit?',
                            'description' => '',
                            'class' => '',
                            'button' => 'Klikněte zde',
                            'buttonlink' => 'informace-rady',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Informace a rady'
                        ]
                    ],
                    'article' => [
                        'filter' => [
                            'categories' => ''
                        ],
                        'limit' => [
                            'total' => '5',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'default',
                            'ordering' => 'asc'
                        ],
                        'display' => [
                            'image' => [
                                'enabled' => 'intro'
                            ],
                            'title' => [
                                'enabled' => 'show',
                                'limit' => ''
                            ],
                            'text' => [
                                'type' => 'intro',
                                'limit' => '',
                                'formatting' => 'text'
                            ],
                            'link' => [
                                'enabled' => 'show',
                                'label' => '',
                                'target' => '_self'
                            ]
                        ]
                    ]
                ]
            ],
            'timeline-2153' => [
                'title' => 'Experience',
                'attributes' => [
                    'enabled' => 0,
                    'title' => 'Experience',
                    'timeline' => [
                        0 => [
                            'subtitle' => 'Template Designer',
                            'startyear' => '2008',
                            'endyear' => '2009',
                            'title' => 'RocketTheme'
                        ],
                        1 => [
                            'subtitle' => 'Senior Designer',
                            'startyear' => '2009',
                            'endyear' => '2010',
                            'title' => 'Facebook Inc.'
                        ],
                        2 => [
                            'subtitle' => 'UI/UX Designer',
                            'startyear' => '2010',
                            'endyear' => '',
                            'title' => 'Apple Inc.'
                        ],
                        3 => [
                            'subtitle' => 'Founder & CEO',
                            'startyear' => '2010',
                            'endyear' => '',
                            'title' => 'Netflix Inc.'
                        ],
                        4 => [
                            'subtitle' => 'Senior Designer',
                            'startyear' => '2012',
                            'endyear' => '2019',
                            'title' => 'Trilby Media'
                        ],
                        5 => [
                            'subtitle' => 'Founder & CEO',
                            'startyear' => '2012',
                            'endyear' => '2019',
                            'title' => 'Google Inc.'
                        ]
                    ]
                ]
            ],
            'photocollage-6382' => [
                'title' => 'Photo feed',
                'attributes' => [
                    'enabled' => 0,
                    'class' => '',
                    'source' => 'particle',
                    'title' => 'Photo feed',
                    'spacing' => '0%',
                    'cases' => [
                        0 => [
                            'width' => 'width-2',
                            'height' => 'height-2',
                            'image' => 'gantry-media://home/expanded/img-01.jpg',
                            'icon' => 'fa fa-search-plus',
                            'title' => 'Item 1'
                        ],
                        1 => [
                            'width' => 'width-2',
                            'height' => 'height-3',
                            'image' => 'gantry-media://home/expanded/img-01.jpg',
                            'icon' => 'fa fa-search-plus',
                            'title' => 'Item 2'
                        ],
                        2 => [
                            'width' => 'width-2',
                            'height' => 'height-2',
                            'image' => 'gantry-media://home/expanded/img-01.jpg',
                            'icon' => 'fa fa-search-plus',
                            'title' => 'Item 3'
                        ],
                        3 => [
                            'width' => 'width-2',
                            'height' => 'height-2',
                            'image' => 'gantry-media://home/expanded/img-01.jpg',
                            'icon' => 'fa fa-search-plus',
                            'title' => 'Item 4'
                        ],
                        4 => [
                            'width' => 'width-2',
                            'height' => 'height-2',
                            'image' => 'gantry-media://home/expanded/img-01.jpg',
                            'icon' => 'fa fa-search-plus',
                            'title' => 'Item 5'
                        ],
                        5 => [
                            'width' => 'width-2',
                            'height' => '',
                            'image' => 'gantry-media://home/expanded/img-01.jpg',
                            'icon' => 'fa fa-search-plus',
                            'title' => 'Item 6'
                        ]
                    ],
                    'article' => [
                        'filter' => [
                            'categories' => ''
                        ],
                        'limit' => [
                            'total' => '5',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'default',
                            'ordering' => 'asc'
                        ],
                        'display' => [
                            'image' => [
                                'enabled' => 'intro'
                            ],
                            'title' => [
                                'enabled' => 'show',
                                'limit' => ''
                            ]
                        ]
                    ]
                ]
            ],
            'logos-5614' => [
                'attributes' => [
                    'logos' => [
                        0 => [
                            'image' => 'gantry-media://home/extension/podporil_ustecky_kraj.jpg',
                            'url' => 'https://www.kr-ustecky.cz',
                            'target' => '_blank',
                            'title' => 'Ústecký kraj'
                        ],
                        1 => [
                            'image' => 'gantry-media://home/extension/Ústí_nad_Labem_Logo.jpg',
                            'url' => 'https://www.usti-nad-labem.cz/cz/',
                            'target' => '_blank',
                            'title' => 'Ústí nad Labem'
                        ],
                        2 => [
                            'image' => 'gantry-media://home/extension/TechSoup_248_60.png',
                            'url' => 'https://www.techsoup.cz',
                            'target' => '_self',
                            'title' => 'TechSoup'
                        ]
                    ]
                ]
            ],
            'system-content-5489' => [
                'attributes' => [
                    'enabled' => 0
                ]
            ],
            'promo-8286' => [
                'attributes' => [
                    'enabled' => 0,
                    'text' => 'I will get <br /> back to you <br /> with a quote <br /> in 24 hours',
                    'image' => 'gantry-media://home/bottom/img-01.jpg'
                ],
                'block' => [
                    'variations' => 'nomarginall nopaddingall'
                ]
            ]
        ]
    ]
];
