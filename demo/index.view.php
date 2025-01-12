<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

    <h1>
        Summary at <?=$summary['website'] ?>
    </h1>

    <ul>
        <?php foreach ($summary['courses'] as $sections): ?>
        
        <li><?=$sections ?></li>

        <?php endforeach ?>
    </ul>

    <!-- <ul>

        <?php foreach($filteredList as $book): ?>

            <li>

                <a href="<?=$book['link'] ?>">

                    <?=$book['name'] ?>(<?=$book['published'] ?>) By- <?= $book['author']?>

                </a>
                 
            </li>

        <?php endforeach ?>

    </ul> -->

</body>
</html>