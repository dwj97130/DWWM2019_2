<?php include 'header.php'; ?>

<h1>Gwadabat</h1>
<p>Gwadabat l'entreprise numéro 1 du BTP</p>
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