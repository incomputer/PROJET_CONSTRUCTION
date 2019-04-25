<?php include("header.php");

session_start();



?>


         
            <div class="w3-container-fluid">
            <h2 class="w3-padding-48 w3-panel w3-blue w3-center" style="text-shadow:1px 1px 0 #444">BhouseOnline</h2>
            <div class="w3-padding-64">
            </div>
            <div class="w3-container w3-center ">

            <div class="w3-row w3-container w3-center">
                <div class="w3-col m12 w3-green w3-center">
                    <button class="w3-button" onclick="document.getElementById('ticketModal6').style.display='block'">Remplissez ce formulaire</button>
                </div>
            </div>
                
                <!-- Ticket Modal -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div id="ticketModal6" class="w3-modal">
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                        <header class="w3-container w3-teal w3-center w3-padding-32"> 
                            <span onclick="document.getElementById('ticketModal6').style.display='none'" 
                        class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                            <h2 class="w3-wide"><i class="fa fa-user w3-margin-right"></i>Formulaire adressé aux personnes qui voudraient acheter cette maison</h2>
                        </header>
                        <div class="w3-container">
                            <p><label><i class="fa fa-"></i></label></p>
                            <input class="w3-input w3-border" type="text" name="nom" placeholder="Nom et prénoms">
                            <p><label><i class=""></i></label></p>
                            <input class="w3-input w3-border" type="cel" name="contact" placeholder="Contact">
                            <p><label><i class=""></i></label></p>
                            <input class="w3-input w3-border" type="mail" name="mail" placeholder="Email">
                            <p><label><i class=""></i></label></p>
                            <p><label><i class=""></i>Êtes-vous intéressez par cet appartement?</label></p>
                            <input class="w3-radio" type="radio" name="maisonlouer" value="Oui" checked>
                            <label>Oui</label>
                            <input class="w3-radio" type="radio" name="maisonlouer" value="Non" checked>
                            <label>Non</label>
                            <p><label><i class=""></i></label></p>
                            <input type="submit" value="Envoyer" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">
                            <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal6').style.display='none'">Fermer<i class="fa fa-remove"></i></button>
                            <p class="w3-right"><a href="#" class="w3-text-blue"></a></p>
                        </div>
                        </div>
                    </div> 
                </form>
               
            </div>
            </div>



            <?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom= test_input($_POST["nom"]);
    $contact = test_input($_POST["contact"]);
    $mail = test_input($_POST["mail"]);
    
    include('admin/database.php');
    $db = Database::connect();
    $statement = $db->prepare("INSERT INTO `achat_vente` (`nom_prenoms_achat_vente`, `contact_achat_vente`, `mail_achat_vente`, `id_immobilier`) VALUES (?,?,?,?)");
     $statement->execute(array($nom,$contact,$mail,$_SESSION['id']));
     Database::disconnect();
     
    }
    
    
     
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>







            <?php include("footer.php") ?>

         