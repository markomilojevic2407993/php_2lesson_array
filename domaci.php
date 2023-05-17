<?php 

$title="POSTANI PROGRAMER";
$nav = [
    "google" => "https://www.google.com/",
    "youtube" => "https://www.youtube.com/",
    "github" => "https://github.com/",
];



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <nav>
            <?php foreach ($nav as $navA=>$navLink): ?>
            <a href="<?php echo $navLink; ?>">
              <?php echo $navA; ?>
            </a>
            <?php endforeach; ?>
        </nav>
    
    </body>
</html>