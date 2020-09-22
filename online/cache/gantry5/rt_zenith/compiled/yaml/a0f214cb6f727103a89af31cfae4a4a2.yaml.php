<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/data/gantry5/themes/rt_zenith/config/pages_-_mapa/layout.yaml',
    'modified' => 1600164244,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1554457514
        ],
        'layout' => [
            '/container-body/' => [
                0 => [
                    0 => [
                        'bodysidebar 20' => [
                            
                        ]
                    ],
                    1 => [
                        'top 80' => [
                            
                        ],
                        '/navigation/' => [
                            
                        ],
                        '/slideshow/' => [
                            0 => [
                                0 => 'promo-2919'
                            ]
                        ],
                        '/header/' => [
                            
                        ],
                        '/above/' => [
                            
                        ],
                        '/feature/' => [
                            
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
                                        0 => [
                                            0 => 'custom-1239 70',
                                            1 => 'custom-3796 30'
                                        ]
                                    ]
                                ],
                                2 => [
                                    'aside 20' => [
                                        
                                    ]
                                ]
                            ]
                        ],
                        '/expanded/' => [
                            
                        ],
                        '/extension/' => [
                            
                        ],
                        '/bottom/' => [
                            0 => [
                                0 => 'blockcontent-7076'
                            ]
                        ],
                        'footer' => [
                            
                        ],
                        'copyright' => [
                            
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
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => '',
                    'variations' => 'section-horizontal-paddings'
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-horizontal-paddings'
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-vertical-paddings section-horizontal-paddings'
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-horizontal-paddings'
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-vertical-paddings section-horizontal-paddings'
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-vertical-paddings section-horizontal-paddings'
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-vertical-paddings section-horizontal-paddings'
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'title' => 'Main',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
                    ]
                ]
            ],
            'aside' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
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
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-horizontal-paddings'
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-vertical-paddings section-horizontal-paddings'
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => 'section-vertical-paddings section-horizontal-paddings'
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'copyright' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'container-body' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children',
                        1 => 'attributes'
                    ]
                ]
            ]
        ],
        'content' => [
            'promo-2919' => [
                'attributes' => [
                    'text' => 'Kde nás najdete?',
                    'image' => ''
                ],
                'block' => [
                    'variations' => 'title-rounded'
                ]
            ],
            'custom-1239' => [
                'title' => 'iFrame s mapou',
                'attributes' => [
                    'html' => '<iframe style="border:none" src="https://frame.mapy.cz/s/pehemehece" width="800" height="600" frameborder="0"></iframe>'
                ]
            ],
            'custom-3796' => [
                'title' => 'Adresa',
                'attributes' => [
                    'html' => '<H2>CESPO, o.p.s.</H2> <br />
Hrnčířská 53/18,<br /> 
Ústí nad Labem<br />
400 01  <br />
<br />
<p>Organizace sdružuje občany se sluchovými vadami a osoby s nimi sympatizující či zabývající se péčí o ně.</p> 
<p>Provozujeme chráněnou dílnu, kde nabízíme masérské, reklamní a tiskařské práce. Zajišťujeme návštěvy solné jeskyně, poznávací zájezdy a výlety. </p> 
<p>Vyučujeme znakový jazyk neslyšících.</p>'
                ]
            ],
            'blockcontent-7076' => [
                'title' => 'About Us - What we do',
                'attributes' => [
                    'enabled' => 0,
                    'source' => 'particle',
                    'class' => 'center g-blockcontent-spacing',
                    'title' => 'This is what we do',
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
                            'accent' => 'none',
                            'icon' => '',
                            'img' => 'gantry-media://rocketlauncher/pages/about-us/mainbar/img-01.jpg',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => '',
                            'description' => '',
                            'class' => 'nopaddingall',
                            'button' => '',
                            'buttonlink' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Introduction'
                        ],
                        1 => [
                            'name' => 'Mission',
                            'icon' => '',
                            'img' => 'gantry-media://rocketlauncher/pages/about-us/mainbar/img-02.jpg',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => '',
                            'description' => '',
                            'class' => 'nopaddingall',
                            'button' => '',
                            'buttonlink' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'title' => 'Sell Goods'
                        ],
                        2 => [
                            'name' => 'Business',
                            'icon' => '',
                            'img' => 'gantry-media://rocketlauncher/pages/about-us/mainbar/img-03.jpg',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => '',
                            'description' => '',
                            'class' => 'nopaddingall',
                            'button' => '',
                            'buttonlink' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'title' => 'Make Profit'
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
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ]
        ]
    ]
];
