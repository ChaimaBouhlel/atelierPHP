<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notes keeper</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1>Vos notes</h1>
    <?php
    foreach ($_SESSION as $note){
        ?>
        <div  class="card" style="width: 18rem;" >
            <div class="card-body">
                <h5 class="card-title"><?=$note['titre'] ?></h5>

            <p class="card-text">
                <?=$note['desc'] ?>            </p>
        </div>
            <br>
    <?php
    }
    ?>
</div>
</body>
</html>
