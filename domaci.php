<?php 

$title="POSTANI PROGRAMER";
$nav = [
    "google" => "https://www.google.com/",
    "youtube" => "https://www.youtube.com/",
    "github" => "https://github.com/",
];


$godina=date("Y");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                
            
        <h1 class="text-center"><?php echo $title; ?></h1>
        <nav class="d-flex justify-content-center bg-primary" >
            <?php foreach ($nav as $navA=>$navLink): ?>
            <a class="text-decoration-none h3 text-warning text-center p-4" href="<?php echo $navLink; ?>">
              <?php echo $navA; ?>
            </a>
            <?php endforeach; ?>
        </nav>
            </div>
        </div>
    
        <footer class="d-flex justify-content-center bg-dark text-white p-4 h5">
            copyright &copy;Marko Milojevic <?php echo $godina ; ?>
        </footer>
    </body>
</html>