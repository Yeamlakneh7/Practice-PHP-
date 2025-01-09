<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

    <h1>
        Recommended Books
    </h1>

    <?php 
        $books = [
            [
                'name' => 'Providence',
                'author' => 'John Piper',
                'published' => 2022,
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
            ]
        ];

        function filterByAuthor($books, $author) {
            $filteredList = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredList[] = $book;
                }
            }
            return $filteredList;
        }
    ?>
 

    <ul>
    
        <?php foreach(filterByAuthor($books, 'Conrad ') as $book) : ?>
            
            <li>
                <a href="<?=$book['link'] ?>">
                <?= $book['name']?>(<?=$book['published'] ?>) -By <?=$book['author'] ?>
                </a>
                
            </li>

        <?php endforeach ?>
    </ul>
    
    

</body>
</html>