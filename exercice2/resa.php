<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Livraison</title>
</head>
<body>
<div class="container">
    <?php
    if (isset($_SESSION['errorMessage'])){
        ?>
        <div class="alert alert-danger">
            <?= $_SESSION['errorMessage'] ?>
        </div>

        <?php
        unset($_SESSION['errorMessage']);
    }
    ?>
    <h1>Passez votre commande:</h1>
    <form action="recap.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="texte"
               name="nom"
               class="form-control"
               id="exampleFormControlInput1"
               placeholder="votre nom">
    </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Prenom</label>
            <input type="texte"
                   name="prenom"
                   class="form-control"
                   id="exampleFormControlInput2"
                   placeholder="votre prenom">
        </div>
        <div class="mb-3">
        <label for="cin" class="form-label">CIN: </label>
        <input type="file" name="cin" id="cin" required>
        </div>
            <div class="mb-3">
            <label for="nbre" class="form-label">Nombre de Sandwiches</label>
            <input type="number"
                   name="nombre"
                   class="form-control"
                   id="nbre">
        </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Adresse</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="adresse" rows="3"></textarea>
    </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">type du sandwich</label>
            <select name ="type" class="form-control" id="exampleFormControlInput3" placeholder="name@example.com">
                <option value="viande">Viande</option>
                <option value="poulet">Poulet</option>
                <option value="Escalope">Escalope</option>
            </select>
        </div>
        <div class="mb-3">
            <p class="form-label">Ingr??dients ?? ajouter</p>

            <div class="form-check">
                <input class="form-check-input" name="salade" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Salade                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="harissa" type="checkbox" value="" id="flexCheckDefault2">
                <label class="form-check-label" for="flexCheckDefault2">
                    Harissa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="mayonnaise" id="flexCheckDefault3">
                <label class="form-check-label" for="flexCheckDefault3">
                    Mayonnaise
                </label>
            </div>
        </div>
        <div class="mb-3">
        <button class="btn btn-primary" type="submit">Valider Commande</button>
        </div>
    </form>
</div>
</body>
</html>