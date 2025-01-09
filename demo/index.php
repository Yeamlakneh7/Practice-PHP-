<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

    <h1>
        Recommended items
    </h1>

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

    ?>

    <ul>

        <?php foreach($filteredList as $book): ?>

            <li>

                <a href="<?=$book['link'] ?>">

                    <?=$book['name'] ?>(<?=$book['published'] ?>) By- <?= $book['author']?>

                </a>
                 
            </li>

        <?php endforeach ?>

    </ul>

</body>
</html>