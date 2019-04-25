// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var modal1 = document.getElementById('ticketModal1');
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}

var modal2 = document.getElementById('ticketModal2');
window.onclick = function(event){
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

var modal3 = document.getElementById('ticketModal3');
window.onclick = function(event){
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}

var modal4 = document.getElementById('ticketModal4');
window.onclick = function(event){
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}

var modal5 = document.getElementById('ticketModal5');
window.onclick = function(event){
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
}

var modal6 = document.getElementById('ticketModal6');
window.onclick = function(event){
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
}

var modal7 = document.getElementById('ticketModal7');
window.onclick = function(event){
  if (event.target == modal7) {
    modal7.style.display = "none";
  }
}

var modal8 = document.getElementById('ticketModal8');
window.onclick = function(event){
  if (event.target == modal8) {
    modal8.style.display = "none";
  }
}