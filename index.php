<?php include 'header.php'; ?>

<div class="entete">
	<img class="logo" src="images/logo.png" alt="Gwadabat">
	<p>Gwadabat, l'entreprise numéro 1 du BTP !</p>
</div>
<h2>Nous sommes à votre service !</h2>
<h3>Une équipe à votre écoute</h3>
	<p>
		Professionnel ou bricoleur amateur, vous pouvez nous contacter afin d’obtenir toutes les informations nécessaires pour réaliser vos travaux. Nous sommes à votre écoute afin d’accompagner vos projets et pour vous conseiller dans le choix de vos produits.
		Contactez-nous par mail ou par téléphone afin d’obtenir les conseils de professionnels. 
		Notre équipe vous assiste tout au long de votre projet afin de vous aider dans le choix des matériaux de construction.
	</p>
	
<section id="pictures">
	<figure>
		<img src="images/brick.jpg" alt="Brique"/>
		<figcaption>Briques en ciment</figcaption>
	</figure>
	<figure>
		<img src="images/graviers.jpg" alt="Graviers"/>
		<figcaption>Graviers</figcaption>
	</figure>
	<figure>
		<img src="images/camion-toupie.jpg" alt="Camion toupie"/>
		<figcaption>Camion de ciment</figcaption>
	</figure>
	<figure>
		<img src="images/parpaing.jpg" alt="Parpaing"/>
		<figcaption>Parpaing</figcaption>
	</figure>
	<figure>
		<img src="images/sable.jpg" alt="Sable"/>
		<figcaption>Sable</figcaption>
	</figure>
</section>

<section id="artcles">
		<form action="traitement.php" method="post">
			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom"/><br/>
			<label for="Quantite">Quantiter</label>
			<select name="quantites" id="quantite">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</form>
</section>
<?php include 'footer.php'; ?>