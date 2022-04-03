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
    <title>Sondage</title>
</head>
<body>
<?php
if(isset($_SESSION['message'])) {
    ?>
        <div class="alert-success">
            <h4> <?= $_SESSION['message'] ?></h4>
        </div>
        <?php
    unset($_SESSION['message']);
    } else
if (isset($_SESSION['error_message'])) {
?>
        <div class="alert-danger">
            <h4> <?= $_SESSION['error_message'] ?></h4>
        </div>
        <?php
    unset($_SESSION['error_message']);
}
?>
<div class="container">
    <h2>Que pensez-vous du cours PHP?</h2>
    <br>
    <form class="form-check" action="processSondage.php" method="post">
        <input class="form-check-input" type="radio" value="bon" name="note" id="bon">
        <label class="form-check-label" for="bon">Bon</label>
        <br>
        <input class="form-check-input" type="radio" value="moyen" name="note" id="moyen">
        <label class="form-check-label" for="moyen">Moyen</label>
        <br>
        <input class="form-check-input" type="radio" value="mauvais" name="note" id="mauvais">
        <label class="form-check-label" for="mauvais">Mauvais</label>
        <br>
        <br>
        <button class="btn btn-dark btn-sm" type="submit">Votez!</button>
    </form>
    </div>
</body>
</html>