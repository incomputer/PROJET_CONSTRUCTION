<?php 

$nom = $date = $heure = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = test_input($_POST["nom"]);
  $date = test_input($_POST["date"]);
  $heure = test_input($_POST["heure"]);

 include('admin/database.php');
 $db = Database::connect();

 $statement = $db->prepare("INSERT INTO `rendez_vous` (`noms`, `date`, `heure`) VALUES (?,?,?)");
 $statement->execute(array($nom,$date,$heure));
 Database::disconnect();
 header('Location:rv.php');
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>