<?php include('header.php') ?>

<div class="w3-padding-64">
</div>


<button  class="w3-button w3-purple w3-round-large w3-hover-aqua" onclick="document.getElementById('ticketModal7').style.display='block'">Prendre un rendez-vous</button>

<div class="w3-center">
    <img src="images/logo.png" style="width:15%">
    <h3 class="w3-text-">BHouseOnline</h3>
    <div class="w3-text-grey ">
      
      <p class="w3-center"><b>La référence du BuyHouseOnline</b></p>    
    </div>
  </div>

<div class="w3-padding-64">
</div>

<div class="w3-padding-64">
</div>



<!-- Ticket Modal -->
<form action="traitement_rv.php" method="post">
                    <div id="ticketModal7" class="w3-modal">
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                        <header class="w3-container w3-teal w3-center w3-padding-32"> 
                            <span onclick="document.getElementById('ticketModal7').style.display='none'" 
                        class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                            <h4 class="w3-wide"><i class="fa fa-user w3-margin-right"></i>Ce formulaire est adressé aux agents immobiliers qui voudraient publier leurs locaux sur ce site</h4>
                        </header>
                        <div class="w3-container">
                            <p><label><i class="fa fa-"></i></label></p>
                            <input class="w3-input w3-border" type="text" name="nom" placeholder="Nom et Prénoms"><br>
                            <input class="w3-input w3-border" type="date" name="date" placeholder="Choisir la date"><br>
                            <input class="w3-input w3-border" type="time" name="heure" placeholder="Choisir la date"><br>
                            <input type="submit" value="Envoyer" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">
                            <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal7').style.display='none'">Fermer<i class="fa fa-remove"></i></button>
                            <p class="w3-right"><a href="#" class="w3-text-blue"></a></p>
                        </div>
                        </div>
                    </div> 
                </form>




<?php include('footer.php') ?>
