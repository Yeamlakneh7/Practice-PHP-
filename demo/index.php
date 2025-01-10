<?php 
        $items = [
            [
                'name' => 'Providence',
                'author' => 'John Piper',
                'published' => 2020,
                'link' => 'https://desiringgod.com/books'
            ], 
            [
                'name' => "God's Design for the Church",
                'author' => 'Conrad Mbewe',
                'published' => 2017,
                'link' => "https://corssway.com/books"
            ],
            [
                'name' => "Astonished by God",
                'author' => 'John Piper',
                'published' => 2017,
                'link' => "https://corssway.com/books"
            ],
            [
                'name' => "The Holiness of God",
                'author' => "R.C. Sproul",
                'published' => 1985,
                'link' => "https://ligonier.org"
            ]
        ];

        $filteredList = array_filter($items, function($book){
            return ($book['published'] > 2010) && ($book['published'] < 2020);
        });

    require "index.view.php";