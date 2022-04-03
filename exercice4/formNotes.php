<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keeper</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Créer une note</h1>
    </div>
    <div class="row">
        <form action="ajouterNote.php" method="post" class="col-6 ">
            <div>
                <label for="name" class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre" id="titre" required>
            </div>
            <br>
            <div>
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" required>
            </div>
            <br>
            <div>
                <button class="btn btn-primary" type="submit">Ajouter note</button>
            </div>
        </form>
    </div>
    <br>
    <div class="row">
        <a href="notes.php" >Consultez les notes ajoutées ici.</a>
    </div>

</div>

</body>
</html>

