<?php

session_start();

$nom = $prenom = $matricule = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom= test_input($_POST["ville"]);
  $prenom = test_input($_POST["commune"]);
  $matricule = test_input($_POST["quartier"]);
  $piece = test_input($_POST["piece"]);
  $montant = test_input($_POST["montant"]);
 






  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$attestation = $_FILES["fileToUpload"]["name"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. <br>";

        echo $attestation;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


require'database.php';

$db = Database::connect();
try{
   
    $statement = $db->prepare("INSERT INTO publier_vente(publier_ville_vente,publier_commune_vente,publier_quartier_vente,publier_nbrepiece_vente,publier_montant_vente,publier_image_vente,id_immobilier) values(?,?,?,?,?,?,?)");
            $statement->execute(array($nom,$prenom,$matricule,$piece,$montant,$attestation,$_SESSION['id']));
            Database::disconnect();
            header("Location: profit.php");
}
catch(PDOException $e)
{
    die($e->getMessage());
}        



?>