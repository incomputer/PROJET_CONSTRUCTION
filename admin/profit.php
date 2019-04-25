<?php session_start(); ?>

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
            <div class="w3-padding-16">

            
            </div>
            <div class="w3-container w3-center ">

            <div class="w3-row w3-container w3-center">
                <div class="w3-col m4 w3-green w3-center">
                    <button class="w3-button" onclick="document.getElementById('ticketModal10').style.display='block'">Publier une Location</button>
                </div>
                
                <div class="w3-col m4 w3-dark-grey w3-center">
                    <button class="w3-button" onclick="document.getElementById('ticketModal').style.display='block'">Publier une vente</button>
                </div>

                <div class="w3-col m4 w3-green w3-center">
                    <button class="w3-button" ><a href="deconnection.php">Déconnexion</a></button>
                </div>
            </div>
                
                <!-- Ticket Modal -->
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div id="ticketModal10" class="w3-modal">
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                        <header class="w3-container w3-teal w3-center w3-padding-32"> 
                            <span onclick="document.getElementById('ticketModal10').style.display='none'" 
                        class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                            <h2 class="w3-wide"><i class="fa fa-user w3-margin-right"></i>Publier location</h2>
                        </header>
                        <div class="w3-container">
                        <input class="w3-input w3-border" type="text" placeholder="Ville"><br>
                            <input class="w3-input w3-border" type="text" name="commune" placeholder="Commune"><br>
                            <input class="w3-input w3-border" type="text" name="quartier" placeholder="Quartier"><br>
                            <input class="w3-input w3-border" type="text" name="piece" placeholder="Nombre de pièces"><br>
                            <input class="w3-input w3-border" type="text" name="montant" placeholder="Montant"><br>
                            <p class="w3-left-align"><label><i>Images maison</i></label></p>
                            <input type="file" class="w3-input w3-border" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Publier" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">
                            <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal10').style.display='none'">Fermer<i class="fa fa-remove"></i></button>
                            <p class="w3-right"><a href="#" class="w3-text-blue"></a></p>
                        </div>
                        </div>
                    </div> 
                </form> 
            
              <!-- Ticket Modal -->
              <form action="insert1.php" method="post" enctype="multipart/form-data">
                    <div id="ticketModal" class="w3-modal">
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                        <header class="w3-container w3-teal w3-center w3-padding-32"> 
                            <span onclick="document.getElementById('ticketModal').style.display='none'" 
                        class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                            <h2 class="w3-wide"><i class="fa fa-user w3-margin-right"></i>Publier vente</h2>
                        </header>
                        <div class="w3-container">
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

                <div class="w3-padding-32">
                </div>

                <div class="w3-container">

                <div class="w3-container">
                <h2></h2>
                <p></p>
                <div class="w3-card" style="width:10%">
                    <img src="uploads/<?=$_SESSION['image']?>" alt="Person" style="width:100%">
                    <div class="w3-container">
                    <h4><b>Simon</b></h4>
                    <p>The boss of all bosses</p>
                    </div>
                </div>
                    <h2>Informations  confidentielles</h2>

                    <table class="w3-table-all w3-centered">
                        <tr>
                        <th>Nom</th>
                        <th>Prénoms</th>
                        <th>Matricule</th>
                        </tr>
                        <tr>
                        <td><?=$_SESSION['nom']?></td>
                        <td><?=$_SESSION['prenom']?></td>
                        <td><?=$_SESSION['matricule']?></td>
                        </tr>
                        
                    </table>
               </div>

               

               <div class="w3-padding-64">
                </div>

           

            </div>
            </div>

          </body>
       </html>