<?php include('header.php');
  session_start();


?>

<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">                            
    <!-- Automatic Slideshow Images -->
<div class= row>

<?php

require 'admin/database.php';
$db = Database::connect();
$statement = $db->query("SELECT * FROM `publier_vente` WHERE `publier_etat_vente` = '0'");
while($item = $statement->fetch()) 
{




  $_SESSION['id'] = $item['id_immobilier'];

 
  echo '<div class="col-md-6 w3-myfont">';
  echo '<h3 styles="text-align:center;"><a href="location.php" class="w3-myfont">Vente de maison</a></h3>';
  echo '<div id="demo1" class="carousel slide" data-ride="carousel">'; 
  echo '<ul class="carousel-indicators">';  
  echo '<li data-target="#demo1" data-slide-to="0" class="active"></li>';
  echo '<li data-target="#demo1" data-slide-to="1"></li>';
  echo '<li data-target="#demo1" data-slide-to="2"></li>';
  echo '</ul>';
  echo '<div class="carousel-inner">';
  echo '<div class="carousel-item active">';
  echo '<img src="admin/uploads/'.$item['publier_image_vente'].'" alt="Los Angeles" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<h3>'.$item['publier_ville_vente'].'</h3>';
  echo '<p>'.$item['publier_commune_vente'].'</p>';
  echo '<p>'.$item['publier_quartier_vente'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_vente'].'</p>';
  echo '<p>'.$item['publier_montant_vente'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php?id='.$_SESSION['id'].'">contactez nous</a></button>';        
  echo '</div>';
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_vente'].'" alt="Chicago" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<h3>'.$item['publier_ville_vente'].'</h3>';
  echo '<p>'.$item['publier_commune_vente'].'</p>';
  echo '<p>'.$item['publier_quartier_vente'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_vente'].'</p>';
  echo '<p>'.$item['publier_montant_vente'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php?id='.$_SESSION['id'].'">contactez nous</a></button>';        
  echo '</div>';   
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_vente'].'" alt="New York" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<h3>'.$item['publier_ville_vente'].'</h3>';
  echo '<p>'.$item['publier_commune_vente'].'</p>';       
  echo '<p>'.$item['publier_quartier_vente'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_vente'].'</p>';
  echo '<p>'.$item['publier_montant_vente'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php?id='.$_SESSION['id'].'">contactez nous</a></button>';
  echo '</div>';   
  echo '</div>';
  echo '</div>';
  echo '<a class="carousel-control-prev" href="#demo1" data-slide="prev">';
  echo '<span class="carousel-control-prev-icon"></span>';
  echo '</a>';
  echo '<a class="carousel-control-next" href="#demo1" data-slide="next">';
  echo '<span class="carousel-control-next-icon"></span>';
  echo '</a>';
  echo '</div>';
  echo '</div>';
  
   


}

?>

</div>
<!-- End Page Content -->
</div>




<?php include('footer.php')?>