<?php

// ============================
// Create SEO Friendly Slug
// ============================
function createSlug($string)
{
    $slug = strtolower(trim($string));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s-]+/', '-', $slug);
    return $slug;
}


// ============================
// Raw Blog Data
// ============================
$blogPage = [

    [
        'title' => 'Web Development Blog',
        'banner-image' => 'assest/image/banner/who-we.jpg',

        'content' => [
            [
                'heading' => 'Your Website is Unique and Attractive',
                'para' => [
                    'Top web development blog topics for 2025-2026 focus on AI integration, performance, and modern framework updates. Key areas include optimizing Core Web Vitals, AI-driven development tools, Progressive Web Apps (PWAs), CSS advancements, and cybersecurity. Popular topics also feature frontend frameworks (React, Vue), backend technologies, accessibility (a11y), and career advice.',
                    'Top web development blog topics for 2025-2026 focus on AI integration, performance, and modern framework updates. Key areas include optimizing Core Web Vitals, AI-driven development tools, Progressive Web Apps (PWAs), CSS advancements, and cybersecurity. Popular topics also feature frontend frameworks (React, Vue), backend technologies, accessibility (a11y), and career advice.'
                ],
                'image' => 'assest/image/banner/who-we.jpg'
            ],
            [
                'heading' => 'Create Blog System',
                'para' => [
                    'Dynamic blog systems use slugs for SEO friendly URLs.'
                ],

            ],
        ]
    ],

    [
        'title' => 'Software Development Blog',
        'banner-image' => 'assest/image/banner/who-we.jpg',

        'content' => [
            [
                'heading' => 'Software Engineering Concepts',
                'para' => [
                    'Clean code and architecture are important.'
                ],
                'image' => 'assest/image/banner/who-we.jpg'
            ]
        ]
    ],

    [
        'title' => 'App Development Blog',
        'banner-image' => 'assest/image/banner/who-we.jpg',

        'content' => [
            [
                'heading' => 'Mobile App Technologies',
                'para' => [
                    'Flutter and React Native are popular frameworks.'
                ],
                'image' => 'assest/image/banner/who-we.jpg'
            ]
        ]
    ]

];


// ============================
// Convert to Slug Based Array
// ============================
$pages = [];

foreach ($blogPage as $blog) {

    $slug = createSlug($blog['title']);

    $blog['slug'] = $slug;

    // Now slug is key
    $pages[$slug] = $blog;
}

?>
