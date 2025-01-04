<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>
        <?php 
            $greetings = "Hello";
            $person = "Everyone";
            echo $greetings . " World" . "<br>"; 
            echo $greetings . " " . "World" . "<br>";
            echo "$greetings World" . "<br>";
            echo $greetings . " " . $person;
            
        ?>
    </h1>
    <!-- <h2>
        <?php 
            echo "with Laracast";
        ?>
    </h2> -->
</body>
</html>