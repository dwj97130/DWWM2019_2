//Vérif des données

function valider(){
  // si la valeur du champ prenom est non vide
  if(document.formArticle.nom.value != "") {
    // les données sont ok, on peut envoyer le formulaire    
    return true;
  }
  else {
    // sinon on affiche un message
    alert("Saisissez un article");
    // et on indique de ne pas envoyer le formulaire
    return false;
  }
}

//Footer / button login / Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}