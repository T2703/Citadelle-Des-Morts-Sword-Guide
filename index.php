<?php
    $swordGuides = [
        ["title" => "Solais", "link" => "light.php", "image" => "images/light.png"], 
        ["title" => "Caliburn", "link" => "fire.php", "image" => "images/fire.png"],
        ["title" => "Balmung", "link" => "void.php", "image" => "images/void.png"],
        ["title" => "Durendal", "link" => "lightning.php", "image" => "images/lightning.png"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Citadelle Des Morts Sword Guide </title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <header>
        <h1> Citadelle Des Morts Sword Guide </h1>
    </header>
    <div>
        <ul>
            <?php foreach ($swordGuides as $guide): ?>
                <li>
                    <a href="<?php echo $guide['link']; ?>">
                        <img src="<?php echo $guide['image']; ?>" alt="<?php echo $guide['title']; ?>">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
