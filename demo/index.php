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
            "Desring God, by John Piper", 
            "The Holiness of God, by R.C Sproul", 
            "The Attributes of God, by A.W Pink"
        ];
    ?>
        <ul>
            <?php foreach ($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach ?>

        </ul> 


</body>
</html>