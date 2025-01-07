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
                'published' => '2022',
                'link' => 'https://desiringgod.com/books'
            ], 
            [
                'name' => "God's Design for the Church",
                'author' => 'Conrad Mbewe',
                'published' => '2017',
                'link' => "https://corssway.com/books"
            ]
        ];
    ?>
 
    <ul>
        <?php foreach ($books as $book) : ?>
            
            <li>
                <a href="<?= $book['link']?>">
                    <?= $book['name']?>
                </a>
            </li>

        <?php endforeach;?>
    </ul>


</body>
</html>