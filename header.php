
<!DOCTYPE html>
<head>
<html lang="fr">
<title>BhouseOnline</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script type="text/javascript" src="js/script.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>


<body class="pale-blue">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card  w3-text-sand ">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-aqua" style="text-decoration:none">ACCUEIL</a>
    <a href="location.php" class="w3-bar-item w3-button w3-padding-large w3-hover-aqua" style="text-decoration:none">LOCATION DE MAISON</a>
    <a href="vente.php" class="w3-bar-item w3-button w3-padding-large w3-hover-aqua" style="text-decoration:none">VENTE DE MASION</a>
    <a href="apropos.php" class="w3-bar-item w3-button w3-padding-large w3-hover-aqua" style="text-decoration:none">A PROPOS DE NOUS</a>
    <a href="rv.php" class="w3-bar-item w3-button w3-padding-large w3-hover-aqua" style="text-decoration:none">Prendre un rendez-vous</a>


  </div>
</div>


<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-blue w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Accueil</a>
  <a href="location.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">location de maison</a>
  <a href="vente.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Vente de maison</a>
  <a href="apropos.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">A propos</a>
  <button class="w3-bar-item w3-button w3-padding-large w3-hide-small" onclick="document.getElementById('ticketModal7').style.display='block'">Prendre un rendez-vous</button>
</div>


