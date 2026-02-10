<?php

// ---------- Slug Generator ----------
function createSlug($string)
{
    $slug = strtolower($string);
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/\s+/', '-', $slug);
    $slug = trim($slug, '-');

    return $slug;
}


// ---------- Raw Pages Data ----------
$pagesRaw = [

    [
        'title' => 'Web Development',
        'banner-image' => 'assest/image/banner/service1.jpg',

        'content' => [

            [
                'heading' => 'Introduction',
                'para' => [
                    'Web design and development covers the comprehensive process of creating websites, merging visual aesthetics (design) with technical functionality (development). Designers create user experiences and layouts using tools, while developers use languages like HTML, CSS, and JavaScript to build, test, and maintain the sites front-end and back-end, ensuring responsiveness and performance. '
                ],
                'image' => 'assest/image/banner/who-we.jpg'
            ],

            [
                'heading' => 'Technologies',
                'para' => [
                    'Frontend: HTML, CSS, JS, PHP, React, Next.js',
                    'Backend: PHP, MySQL, Node'
                ]
            ],
        ]
    ],

    [
        'title' => 'Web Application',
        'banner-image' => 'assest/image/banner/app-development.avif',

        'content' => [

            [
                'heading' => 'SEO',
                'para' => [
                    'Web application development is the process of designing, building, testing, and deploying interactive software programs that run in a web browser. Unlike static websites that primarily display information, web applications are designed for user interaction, allowing users to input data, perform actions, and receive dynamic, personalized responses.'
                ],
                'image' => 'assest/image/banner/app-development.avif'
            ],

            [
                'heading' => 'Social Media',
                'para' => [
                    'Facebook',
                    'Instagram',
                    'YouTube'
                ]
            ],
        ]
    ],


    [
        'title' => 'App Development',
        'banner-image' => 'assest/image/banner/services3.jpg',

        'content' => [

            [
                'heading' => 'About Apps',
                'para' => [
                    'Mobile apps run on Android and iOS.',
                    'We use Flutter and React Native.'
                ],
                'image' => 'assest/image/banner/who-we.jpg'
            ],

            [
                'heading' => 'Platforms',
                'para' => [
                    'Android',
                    'iOS',
                    'Cross Platform'
                ]
            ],
        ]
    ],

    [
        'title' => 'Software Development',
        'banner-image' => 'assest/image/banner/services3.jpg',

        'content' => [

            [
                'heading' => 'About Apps',
                'para' => [
                    'Software development is the comprehensive process of designing, coding, testing, deploying, and maintaining software applications and systems, transforming ideas into functional digital products that solve problems and meet user needs through creative engineering and programming.',
                ],
                'image' => 'assest/image/banner/software_development.jpg'
            ],

            [
                'heading' => 'What are the 7 stages of software development?',
                'para' => [
                    'The 7 steps of the Software Development Life Cycle (SDLC) provide a structured framework, typically including Planning, Requirements Analysis, Design, Development (Coding), Testing, Deployment, and Maintenance, guiding software from an idea to a fully operational product, focusing on systematic phases like gathering requirements, designing architecture, coding, rigorous testing, releasing, and ongoing updates to ensure quality and meet user needs. '
                ]
            ],
        ]
    ],


    [
        'title' => 'Digital Marketing',
        'banner-image' => 'assest/image/banner/marketing.webp',

        'content' => [

            [
                'heading' => 'Search Engine Optimization',
                'para' => [
                    'Digital marketing encompasses all marketing efforts that use the internet, electronic devices, and digital channels—such as websites, social media, search engines, and email—to connect with audiences, build brand awareness, and drive sales. It enables highly targeted, measurable, and cost-effective campaigns, allowing businesses to reach customers in real-time. '
                ],
                'image' => 'assest/image/banner/marketing.webp'
            ],

            [
                'heading' => 'Social Media',
                'para' => [
                    'Facebook',
                    'Instagram',
                    'YouTube'
                ]
            ],
        ]
    ],

    [
        'title' => 'Social Media',
        'banner-image' => 'assest/image/banner/Social-Media-Marketing.webp',

        'content' => [

            [
                'heading' => 'SEO',
                'para' => [
                    'Social media marketing (SMM) is the use of platforms like Facebook, Instagram, LinkedIn, TikTok, and X to build brand awareness, engage customers, drive website traffic, and increase sales. It involves creating tailored content, running paid advertisements, and analyzing engagement metrics to foster community and achieve business goals.'
                ],
                'image' => 'assest/image/banner/who-we.jpg'
            ],

            [
                'heading' => 'Social Media',
                'para' => [
                    'Facebook',
                    'Instagram',
                    'YouTube'
                ]
            ],
        ]
    ],

    [
        'title' => 'SEO Services',
        'banner-image' => 'assest/image/banner/SEO_services.webp',

        'content' => [

            [
                'heading' => 'Search Engine Optimization',
                'para' => [
                    'SEO (Search Engine Optimization) services improve a websites visibility, ranking, and organic traffic on search engines like Google through strategic, non-paid techniques. These services typically include keyword research, on-page optimization, technical SEO, link building, and content creation to increase brand awareness, drive targeted traffic, and boost conversions. '
                ],
                'image' => 'assest/image/banner/SEO_services.webp'

            ],

            [
                'heading' => 'Social Media',
                'para' => [
                    'Facebook',
                    'Instagram',
                    'YouTube'
                ]
            ],
        ]
    ],

];


// ---------- Convert to Slug Based Pages ----------
$pages = [];

foreach ($pagesRaw as $page) {

    $slug = createSlug($page['title']);

    $pages[$slug] = $page;
}
