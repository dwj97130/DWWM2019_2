<footer>
		<div id="contact" class="offset">
		<div class="foot text-center" id="foot-1">
			
			<div class="col-md-5 text-center">
				<img class="imgfoot" src="images/logo.png" alt="logo GWADABAT"><br/>

				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Connectez-vous</button>

				<div id="id01" class="modal">
  				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  				<form class="modal-content" action="#" method="post">
    				<div class="col-12" text-center>
							<h2 class="heading">Connectez-vous</h2><br/>
							<div class="heading-underline"></div>
						</div>
      			<p>Rentrez votre identifiant et votre mot de passe :</p>
      				<hr>
      				<div class="row text-right">
								<div class="col-md-4">
									<label for="user"><b>Identifiant</b></label>
									<input type="text" placeholder="Entrez votre identifiant" name="user" required>
									<br/>
									
									<label for="password"><b>Mot de passe</b></label>
									<input type="text" placeholder="Entrez votre mot de passe" name="password" required>
									<br/>
									<br/>
								</div>
						</div> <!-- End row form -->
						<div class="clearfix">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
							<button type="submit" class="signupbtn">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
		<p>Copyright &copy Gwadabat Didi & Fran 2019</p>
</footer>

<script src="js/script.js"></script> 
</body>
</html>