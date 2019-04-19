<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Articles</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/all.css">
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><a href="index.php" class="active"><i class="fas fa-home">Accueil</i></a></li>
					<li><a href="#">Articles</a></li>
					<li><a href="#">Commandes</a></li>
					<li><a href="#">Clients</a></li>
				</ul>
			</nav>
		</header>
		
		 <!-- Formulaire à remplir -->
		<section id="articles">
			<form action="traitement.php" onsubmit="return valider()" method="post" name="formArticle">
				<legend>Articles</legend>
				<fieldset>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom"/><br/>
				<label for="Quantite">Quantité</label>
				<select name="quantites" id="quantite">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				<label for="unités">Unité</label>
				<select name="unité" id="unités">
					<option value="1">m3</option>
					<option value="2">kg</option>
					<option value="3">l</option>
				</select>
				</fieldset>
				<input class="btn1" type="submit" value="Valider la commande"/> <!-- Bouton Sauvegarder -->
			</form>
		</section>

		<!-- Bouton téléchargement / Largeur auto -->
		<a href="pdf/materiaux.pdf" download>
		<button class="btn"><i class="fa fa-download"></i> Télécharger images</button>
		</a>
		
		<footer>
				<p>Copyright &copy Gwadabat Didi & Fran 2019</p>
		</footer>
	<script src="myScript.js"></script> 
	</body>
</html>