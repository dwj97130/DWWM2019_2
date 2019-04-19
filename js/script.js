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