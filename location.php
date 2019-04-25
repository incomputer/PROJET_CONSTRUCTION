<?php include('header.php');?>

<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">                            
    <!-- Automatic Slideshow Images -->
<div class= row>

<?php




 session_start();
 


require 'admin/database.php';
$db = Database::connect();
$statement = $db->query("SELECT * FROM `publier_location` WHERE `publier_etat_location` = '0'");


while($item = $statement->fetch()) 
{
 
 $_SESSION['id'] = $item['id_immobilier'];
  

  echo '<div class="col-md-6 w3-myfont">';
  echo '<h3 styles="text-align:center;"><a href="location.php" class="w3-myfont">Location de maison</a></h3>';
  echo '<div id="demo" class="carousel slide" data-ride="carousel">'; 
  echo '<ul class="carousel-indicators">';  
  echo '<li data-target="#demo" data-slide-to="0" class="active"></li>';
  echo '<li data-target="#demo" data-slide-to="1"></li>';
  echo '<li data-target="#demo" data-slide-to="2"></li>';
  echo '</ul>';
  echo '<div class="carousel-inner">';
  echo '<div class="carousel-item active">';
  echo '<img src="admin/uploads/'.$item['publier_image_location'].'" alt="Los Angeles" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<p>'.$item['publier_ville_location'].'</p>';
  echo '<p>'.$item['publier_commune_location'].'</p>';
  echo '<p>'.$item['publier_quartier_location'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_location'].'</p>';
  echo '<p>'.$item['publier_montant_location'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php?id='.$_SESSION['id'].'">contactez nous</a></button>';        
  echo '</div>';
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_location'].'" alt="Chicago" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<p>'.$item['publier_ville_location'].'</p>';
  echo '<p>'.$item['publier_commune_location'].'</p>';
  echo '<p>'.$item['publier_quartier_location'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_location'].'</p>';
  echo '<p>'.$item['publier_montant_location'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php?id='.$_SESSION['id'].'">contactez nous</a></button>';        
  echo '</div>';   
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_location'].'" alt="New York" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<p>'.$item['publier_ville_location'].'</p>';
  echo '<p>'.$item['publier_commune_location'].'</p>';       
  echo '<p>'.$item['publier_quartier_location'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_location'].'</p>';
  echo '<p>'.$item['publier_montant_location'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php?id='.$_SESSION['id'].'">contactez nous</a></button>';
  echo '</div>';   
  echo '</div>';
  echo '</div>';
  echo '<a class="carousel-control-prev" href="#demo" data-slide="prev">';
  echo '<span class="carousel-control-prev-icon"></span>';
  echo '</a>';
  echo '<a class="carousel-control-next" href="#demo" data-slide="next">';
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