<?php 

//     $items = [
//         [
//             'name' => 'Providence',
//             'author' => 'John Piper',
//             'published' => 2020,
//             'link' => 'https://desiringgod.com/books'
//         ], 
//         [
//             'name' => "God's Design for the Church",
//             'author' => 'Conrad Mbewe',
//             'published' => 2017,
//             'link' => "https://crossway.com/books"
//         ],
//         [
//             'name' => "Astonished by God",
//             'author' => 'John Piper',
//             'published' => 2017,
//             'link' => "https://desringgod.org/books"
//         ],
//         [
//             'name' => "The Holiness of God",
//             'author' => "R.C. Sproul",
//             'published' => 1985,
//             'link' => "https://ligonier.org"
//         ]
//     ];

//     $filteredList = array_filter($items, function($book){
//         return $book['published'] == 2017;
    
//     });

// require "index.view.php";


$summary = [
    'courses' => ['PHP Fundamentals', 'MySQL', 'MVC'],
    'website' => "Laracasts",
    'daysRequired' => 50,
    'willBeDone' => TRUE
];

require "index.view.php";