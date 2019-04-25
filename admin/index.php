<?php


    session_start();


     
    require('database.php');
    $db = Database::connect(); 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nom = htmlspecialchars($_POST['nom']);
        $matricule = htmlspecialchars($_POST['matricule']);
        $statement2 = $db->prepare("SELECT * FROM agent_immobilier WHERE  nom_immobilier = ? AND matricule_immobilier = ? LIMIT 1");
        $statement2->execute(array($nom, $matricule));
        if($statement2->rowCount()>0){
            $result = $statement2->fetch();
            $_SESSION['id'] = $result['id_immobilier'];
            $_SESSION['nom'] = $result['nom_immobilier'];
            $_SESSION['prenom'] = $result['prenom_immobilier'];
            $_SESSION['matricule'] = $result['matricule_immobilier'];
            $_SESSION['image'] = $result['attestation'];

            header("Location: profit.php");
        }
        else{
            $message = "Pas de compte";
        }
    }

?>


<!DOCTYPE html>
   
        <html lang="fr">
            <head>
                <title>Admin BhouseOnline</title>
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
          <body>
            <div class="w3-container-fluid">
            <h2 class="w3-padding-48 w3-panel w3-blue w3-center" style="text-shadow:1px 1px 0 #444">Admin BhouseOnline</h2>
            <div class="w3-padding-64">
            </div>
            <div class="w3-container w3-center ">

            <div class="w3-row w3-container w3-center">
                <div class="w3-col m6 w3-green w3-center">
                    <button class="w3-button" onclick="document.getElementById('ticketModal').style.display='block'">Connexion</button>
                </div>
                
                <div class="w3-col m6 w3-dark-grey w3-center">
                    <button class="w3-button" onclick="document.getElementById('ticketModal1').style.display='block'">Créer un compte</button>
                </div>
            </div>
                
                <!-- Ticket Modal -->
                <form method="post">
                    <?php if(isset($message))
                    {
                        echo $message;
                    }
                    ?>
                    <div id="ticketModal" class="w3-modal">
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                        <header class="w3-container w3-teal w3-center w3-padding-32"> 
                            <span onclick="document.getElementById('ticketModal').style.display='none'" 
                        class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                            <h2 class="w3-wide"><i class="fa fa-user w3-margin-right"></i>Connexion</h2>
                        </header>
                        <div class="w3-container">
                            <p><label><i class="fa fa-"></i></label></p>
                            <input class="w3-input w3-border" type="text" name="nom" placeholder="Nom immobilier">
                            <p><label><i class=""></i></label></p>
                            <input class="w3-input w3-border" type="text" name="matricule" placeholder="Matricule immobilier">
                            <input type="submit" value="Connexion" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">
                            <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">
                            Fermer<i class="fa fa-remove"></i></button>
                            <p class="w3-right"><a href="#" class="w3-text-blue"></a></p>
                        </div>
                        </div>
                    </div> 
                </form>
               
            
                <!-- Ticket Modal -->
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div id="ticketModal1" class="w3-modal">
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                        <header class="w3-container w3-teal w3-center w3-padding-32"> 
                            <span onclick="document.getElementById('ticketModal1').style.display='none'" 
                        class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                            <h2 class="w3-wide"><i class="fa fa-user w3-margin-right"></i>Créer un compte</h2>
                        </header>
                        <div class="w3-container">
                            <p><label><i class="fa fa-"></i></label></p>
                            <input class="w3-input w3-border" type="text" name ="nom" placeholder="Nom"><br>
                            <input class="w3-input w3-border" type="text" name ="prenom"  placeholder="Prenom"><br>
                            <input class="w3-input w3-border" type="text" name ="matricule"  placeholder="Matricule"><br>
                            <p  class="w3-left-align"><label><i>attestion d'agent immobilier</i></label></p>
                            <input type="file" class="w3-input w3-border" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Connexion" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">
                            <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal1').style.display='none'">Fermer<i class="fa fa-remove"></i></button>
                            <p class="w3-right"><a href="#" class="w3-text-blue"></a></p>
                        </div>
                        </div>
                    </div> 
                </form> 

            </div>
            </div>

          </body>
       </html>