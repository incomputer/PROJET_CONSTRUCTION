<!-- Automatic Slideshow Images -->
<div class="row">
<div class="col-md-6 ">
  <div class="mySlides w3-display-container w3-center">
    <img src="/w3images/la.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Los Angeles</h3>
      <p><b>We had the best time playing at Venice Beach!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="/w3images/ny.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>New York</h3>
      <p><b>The atmosphere in New York is lorem ipsum.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="/w3images/chicago.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Chicago</h3>
      <p><b>Thank you, Chicago - A night we won't forget.</b></p>    
    </div>
  </div>
  </div>
  </div>




  <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Name</p>
        <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Name</p>
        <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Name</p>
        <img src="/w3images/bandmember.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>





  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">TOUR DATES</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/newyork.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/paris.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/sanfran.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>


  <!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">



<p class="w3-medium">Powered by <a href="https://nan.ci" target="_blank">NAN</a></p>

<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
<h2 class="w3-wide"></h2>
    <p class="w3-opacity"><i>Faites votre choix</i></p>
    <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">par ici</button>

    $_SERVER["REQUEST_METHOD"] == "POST"



    <?php 


if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
     
    require('database.php');
    $db = Database::connect(); 
    $recup = $db->query('SELECT * FROM agent_immobilier');
    while($item1 = $recup->fetch()){
        
    }


    $statement1 = $db->prepare("SELECT * FROM agent_immobilier WHERE id_immobilier = ?");
    $statement1->execute(array($id));
    $item2 = $statement1->fetch();
    Database::disconnect();

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

if(isset($_POST)){
$nom = $_POST['nom'];
$matricule = $_POST['matricule'];
//echo $nom." ".$matricule;
//require'database.php';
//$db = Database::connect();

$statement2 = $db->prepare("SELECT * FROM agent_immobilier WHERE nom_immobilier = ? AND matricule_immobilier = ?");
$statement2->execute(array($nom, $matricule));

if($result = $statement->fetch()){

header('location:profit.php?id='.$item1['id_immobilier']);

}else{

header("index.php");
}

Database::disconnect();

};

echo "<a href='index.php'>saisie incorrecte</a>";
?>





<?php
    session_start();

    if(!isset($_SESSION['id'])){

        header('Location: index.php');
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $traitement = $_POST['traitement'];

        if($traitement == '1'){
            $ville = $_POST['ville'];
            $commune = $_POST['commune'];
            $quartier = $_POST['quartier'];
            $piece = $_POST['piece'];
            $montant = $_POST['montant'];
            // $image = $_FILES['fileToUpload'];


            // $attestation = $_FILES["fileToUpload"]["name"];
            // $target_dir = "uploads/";
            // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            // $uploadOk = 1;
            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // // Check if image file is a actual image or fake image
            // if(isset($_POST["submit"])) {
            //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            //     if($check !== false) {
            //         echo "File is an image - " . $check["mime"] . ".";
            //         $uploadOk = 1;
            //     } else {
            //         echo "File is not an image.";
            //         $uploadOk = 0;
            //     }
            // }
            // // Check if file already exists
            // if (file_exists($target_file)) {
            //     echo "Sorry, file already exists.";
            //     $uploadOk = 0;
            // }
            // // Check file size
            // if ($_FILES["fileToUpload"]["size"] > 500000) {
            //     echo "Sorry, your file is too large.";
            //     $uploadOk = 0;
            // }
            // // Allow certain file formats
            // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            // && $imageFileType != "gif" ) {
            //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            //     $uploadOk = 0;
            // }
            // // Check if $uploadOk is set to 0 by an error
            // if ($uploadOk == 0) {
            //     echo "Sorry, your file was not uploaded.";
            // // if everything is ok, try to upload file
            // } else {
            //     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            //         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. <br>";

            //         echo $attestation;
            //     } else {
            //         echo "Sorry, there was an error uploading your file.";
            //     }
            // }


            require'database.php';

            $db = Database::connect();
            try{
            
                $statement = $db->prepare("INSERT INTO publier_location(publier_ville_location,	publier_commune_location,	publier_quartier_location,	publier_nbrepiece_location,	publier_montant_location,	publier_image_location) values(?, ?, ?, ?, ?)");
                        $statement->execute(array($ville,$commune,$quartier,$piece,$montant));
                        Database::disconnect();
                       
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }



        }
    }





   





?>


    <!-- Ticket Modal -->
    <form method="post" action="insert.php" enctype="multipart/data-form">
        <!--input name="traitement" value="1" type="hidden"-->
        <div id="ticketModal" class="w3-modal">
            <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32"> 
                <span onclick="document.getElementById('ticketModal').style.display='none'" 
            class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-user w3-margin-right"></i>Publier une location</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-"></i></label></p>
                <input class="w3-input w3-border" type="text" name="ville" placeholder="Ville"><br>
                <input class="w3-input w3-border" type="text" name="commune" placeholder="Commune"><br>
                <input class="w3-input w3-border" type="text" name="quartier" placeholder="Quartier"><br>
                <input class="w3-input w3-border" type="text" name="piece" placeholder="Nombre de pièces"><br>
                <input class="w3-input w3-border" type="text" name="montant" placeholder="Montant"><br>
                <p class="w3-left-align"><label><i>Images maison</i></label></p>
                <input type="file" class="w3-input w3-border" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Publier" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">
                <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Fermer<i class="fa fa-remove"></i></button>
                <p class="w3-right"><a href="#" class="w3-text-blue"></a></p>
            </div>
            </div>
        </div> 
    </form>










    <!--div class="col-md-6">
<h3 styles="text-align:center;">Location de maison</h3>

    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
      <h3>Abidjan</h3>
        <p>Yopougon</p>
        <p>Sipores</p>
        <p>2 pieces</p>

        <button class=""><a href="locationclient.php">contactez nous</a></button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      <h3>Man</h3>
        <p>Commune</p>
        <p>Quartier Sous-Prefecture</p>
        <p>2 pieces</p>
        <button class=""><a href="locationclient.php">contactez nous</a></button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      <h3>Abidjan</h3>
        <p>yopugon</p>
        <p>Andokoi</p>
        <p>2 pieces</p>
        <button class=""><a href="locationclient.php">contactez nous</a></button>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<div class="col-md-6">
<h3 styles="text-align:center;">Vente de maison</h3>

    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
      <h3>Abidjan</h3>
        <p>Yopougon</p>
        <p>Sipores</p>
        <p>2 pieces</p>
        <p>+22508772469</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      <h3>Man</h3>
        <p>Commune</p>
        <p>Quartier Sous-Prefecture</p>
        <p>2 pieces</p>
        <p>+22566374278</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      <h3>Abidjan</h3>
        <p>yopugon</p>
        <p>Andokoi</p>
        <p>2 pieces</p>
        <p>+22563994425</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div-->








<div id="demo1" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo1" data-slide-to="0" class="active"></li>
      <li data-target="#demo1" data-slide-to="1"></li>
      <li data-target="#demo1" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/image4.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
        <h3>Abidjan</h3>
          <p>Yopougon</p>
          <p>Sipores</p>
          <p>2 pieces</p>
          <button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php">contactez nous</a></button>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="images/image5.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
        <h3>Man</h3>
          <p>Commune</p>
          <p>Quartier Sous-Prefecture</p>
          <p>2 pieces</p>
          <button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php">contactez nous</a></button>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="images/image6.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
        <h3>Abidjan</h3>
          <p>yopugon</p>
          <p>Andokoi</p>
          <p>2 pieces</p>
          <button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php">contactez nous</a></button>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo1" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo1" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  </div>










  <?php include('header.php');?>
<div class="w3-row w3-padding-32">
      
</div>
<div class="w3-row w3-padding-32">
<h2 class="w3-wide w3-center">Location de Maison</h2>
</div>

<div class="row container-fluid  ">

<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Abidjan
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title justify-content-center">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body container">
          <h3>Cocody</h3>
          <div class="row ">       
            <div class="container col-md-6">
            <h2></h2>
            <p></p>            
            <img src="images/image1l.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
            <button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php">contactez nous</a></button> 
            </div> 
            <div class="container col-md-6">
            <h2></h2>
            <p></p>            
            <img src="images/image2l.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            <button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php">contactez nous</a></button>
            </div>
            <div class="container col-md-6">
            <h2></h2>
            <p></p>            
            <img src="images/image3l.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
            <button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php">contactez nous</a></button> 
            </div>
            <div class="container col-md-6">
            <h2></h2>
            <p></p>            
            <img src="images/image4.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
            <button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="venteclient.php">contactez nous</a></button> 
            </div>
          </div>

          <h3>Bingerville</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Yopougon</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Marcory</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
    Bouaké
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
    Divo
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
    Daloa
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal3">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
    Korhogo
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal4">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
    Gagnoa
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal5">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
    Man
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal6">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal7">
    Katiola
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal7">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal8">
    Séguéla
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal8">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal9">
    Bouaflé
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal9">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal10">
    Issia
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal10">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal11">
    Agboville
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal11">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


</div>
<div class="w3-row w3-padding-32">
      
</div>

<?php include('footer.php')?>




































<?php include('header.php');?>
<div class="w3-row w3-padding-32">
      
</div>
<div class="w3-row w3-padding-32">
<h2 class="w3-wide w3-center">Vente de Maison</h2>
</div>

<div class="row container-fluid  ">

<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Abidjan
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title justify-content-center">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body container">
          <h3>Cocody</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Bingerville</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Yopougon</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Marcory</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
    Bouaké
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
    Divo
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
    Daloa
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal3">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
    Korhogo
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal4">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
    Gagnoa
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal5">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
    Man
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal6">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal7">
    Katiola
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal7">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal8">
    Séguéla
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal8">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal9">
    Bouaflé
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal9">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal10">
    Issia
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal10">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container col-md-3">
  <h2></h2>
  <p></p>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal11">
    Agboville
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal11">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Maison à louer</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3></h3>
          <p></p>
          <p></p>

          <h3>Nord-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Nord-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Est</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <h3>Sud-Ouest</h3>
          <div class="row ">       
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div> 
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
            <div class="container col-md-3">
            <h2></h2>
            <p></p>            
            <img src="images/image1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
            </div>
          </div>

          <p></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


</div>
<div class="w3-row w3-padding-32">
      
</div>

<?php include('footer.php')?>




























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
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php">contactez nous</a></button>';        
  echo '</div>';
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_vente'].'" alt="Chicago" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<h3>'.$item['publier_ville_vente'].'</h3>';
  echo '<p>'.$item['publier_commune_vente'].'</p>';
  echo '<p>'.$item['publier_quartier_vente'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_vente'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php">contactez nous</a></button>';        
  echo '</div>';   
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_vente'].'" alt="New York" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<h3>'.$item['publier_ville_vente'].'</h3>';
  echo '<p>'.$item['publier_commune_vente'].'</p>';       
  echo '<p>'.$item['publier_quartier_vente'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_vente'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php">contactez nous</a></button>';
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
  echo '<h3>'.$item['publier_ville_location'].'</h3>';
  echo '<p>'.$item['publier_commune_location'].'</p>';
  echo '<p>'.$item['publier_quartier_location'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_location'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php">contactez nous</a></button>';        
  echo '</div>';
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_location'].'" alt="Chicago" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<h3>'.$item['publier_ville_location'].'</h3>';
  echo '<p>'.$item['publier_commune_location'].'</p>';
  echo '<p>'.$item['publier_quartier_location'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_location'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php">contactez nous</a></button>';        
  echo '</div>';   
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_location'].'" alt="New York" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<h3>'.$item['publier_ville_location'].'</h3>';
  echo '<p>'.$item['publier_commune_location'].'</p>';       
  echo '<p>'.$item['publier_quartier_location'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_location'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php">contactez nous</a></button>';
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
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php">contactez nous</a></button>';        
  echo '</div>';
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_vente'].'" alt="Chicago" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<h3>'.$item['publier_ville_vente'].'</h3>';
  echo '<p>'.$item['publier_commune_vente'].'</p>';
  echo '<p>'.$item['publier_quartier_vente'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_vente'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php">contactez nous</a></button>';        
  echo '</div>';   
  echo '</div>';
  echo '<div class="carousel-item">';
  echo '<img src="admin/uploads/'.$item['publier_image_vente'].'" alt="New York" width="1100" height="500">';
  echo '<div class="carousel-caption">';
  echo '<h3>'.$item['publier_ville_vente'].'</h3>';
  echo '<p>'.$item['publier_commune_vente'].'</p>';       
  echo '<p>'.$item['publier_quartier_vente'].'</p>';
  echo '<p>'.$item['publier_nbrepiece_vente'].'</p>';
  echo '<button class="w3-button w3-white w3-border w3-border-blue w3-round-large"><a href="locationclient.php">contactez nous</a></button>';
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