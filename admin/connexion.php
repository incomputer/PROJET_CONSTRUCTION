<?php 

    session_start();


     
    require('database.php');
    $db = Database::connect(); 
    // $recup = $db->query('SELECT * FROM agent_immobilier');
    //  while($item1 = $recup->fetch()){

    //     $id = $item1['id_immobilier'];

    //   }
        

    // function checkInput($data) 
    // {
    //   $data = trim($data);
    //   $data = stripslashes($data);
    //   $data = htmlspecialchars($data);
    //   return $data;
    // }

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nom = htmlspecialchars($_POST['nom']);
    $matricule = htmlspecialchars($_POST['matricule']);

    $db = Database::connect();

    $statement2 = $db->prepare("SELECT * FROM agent_immobilier WHERE  nom_immobilier = ? AND matricule_immobilier = ? LIMIT 1");
    $statement2->execute(array($nom, $matricule));


    if($statement2->rowCount()>0){
        $result = $statement2->fetch();
        $_SESSION['id'] = $result['id_immobilier'];
        $_SESSION['prenoms'] = $result['prenoms_immobilier'];
        header("Location: profil.php");
    }
    else{
        echo "Pas de compte";
    }
}