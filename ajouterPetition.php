<?php
	
	try{
		$bdd = new PDO('mysql:host=localhost:3306;dbname=tp4;charset=utf8', 'root', '');
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
						}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
	 if(isset($_POST['submit'])){
		
	 $query = $bdd->prepare('INSERT INTO petitions(Titre, Description, DatePublic) values(:titre,:description, :datePublic )'); 
	 $query->execute(array('titre'=>$_POST['titre'], 'description'=>$_POST['description'], 'datePublic'=>$_POST['datePublic']));
	}
	
 ?>


<!DOCTYPE html>
 <html>
 <body>
  	<form method="POST">
		<fieldset>
			<div class="form-group">
				<legend>Ajouter une petition</legend>
				<label>Titre</label>
		      	<input type="text" class="form-control" name="titre"><br><br>
		      	<label>Description</label>
		      	<input type="textarea	" class="form-control" name="description"><br><br>
		      	<label>Date public</label>
		      	<input type="date" class="form-control" name="datePublic"><br><br>
		      	<button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
				
			</div>
		</fieldset>
	</form>
 </body>
 </html>