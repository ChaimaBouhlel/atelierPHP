<?php
$nom=ucfirst(htmlentities($_POST["nom"]));
$prenom=ucfirst(htmlentities($_POST["prenom"]));
$nombre=$_POST["nombre"];
$adresse=htmlentities($_POST["adresse"]);
$type=ucfirst(htmlentities($_POST["type"]));
$mayo=isset($_POST["mayonnaise"]);
$salade=isset($_POST["salade"]);
$harissa=isset($_POST["harissa"]);
$prix_total=$nombre*4;
$remise=0;
$prix_final=$prix_total;
if($nombre>10){
    $remise=$prix_total*0.1;
    $prix_final=$prix_total-$remise;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>recap</title>
</head>
<body>

<table class="table">
    <tbody>
    <tr>
        <th scope="row" >Nom</th>
        <td ><?=$nom?></td>
    </tr>
    <tr>
        <th  scope="row" >Prenom</th>
        <td ><?=$prenom?></td>
    </tr>
    <tr>
        <th  scope="row"  >No. de sandwichs</th>
        <td ><?=$nombre?></td>
    </tr>
    <tr>
        <th  scope="row" >Type</th>
        <td ><?=$type?></td>
    </tr>
    <tr>
        <th  scope="row" >Ingredients à ajouter</th>
        <td ><?php
            if ($mayo==FALSE && $harissa==FALSE && $salade==FALSE){
                echo "Rien";
            }
            else if ($harissa==TRUE){
                echo " Harissa\n";
            }
            if($mayo==TRUE){
                echo " Mayonnaise\n";
            }
            if($salade==TRUE){
                echo " Salade\n";
            }
            ?></td>
    </tr>
    <tr>
        <th  scope="row"  >Prix Total</th>
        <td ><?="${prix_total} DT"?></td>
    </tr>
    <?php
    if ($nombre>10){
        echo "<tr>
            <th > Remise</th>
			<td>${remise} DT</td>
		</tr>";
        echo "<tr>
        <th > Prix Final après Remise</th>
        <td >${prix_final} DT</td>
    </tr>";
    }?>
    </tbody>
</table>
</body>
</html>



