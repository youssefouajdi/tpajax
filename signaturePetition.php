<!DOCTYPE html>
 <html>
 <body >
  	<form action="ajouterSignature.php" method="POST">
		<fieldset>
			<div class="form-group">
				<legend>Formulaire signature</legend>
				<hr>
				IDP:
		      	<input type="text" class="form-control" name="idp" <?php echo 'value="'.$_GET['id'].'"'; ?>>
		      	<br>Nom:
		      	<input type="text" class="form-control" name="nom">
		      	<br>Prenom:
		      	<input type="text" class="form-control" name="prenom">
		      	<br>Email:
		      	<input type="email" class="form-control" name="email">
				<br>Pays:
		      	<input type="text" class="form-control" name="pays">
				<br>Date:
				<input type="date" class="form-control" name="date" >
				<br>Heure:
				<input type="time" class="form-control" name="heure" ><br><br>
		      	<button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
		      	<br><br>
			</div>
		</fieldset>
	</form>
 </html>