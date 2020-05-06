<?php
try{
		$bdd = new PDO('mysql:host=localhost:3306;dbname=tp4;charset=utf8', 'root', '');
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
				$idp = $_POST['idp'];
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$email = $_POST['email'];
				$pays = $_POST['pays'];
				$date=$_POST['date'];
				$heure=$_POST['heure'];
				$bd = $GLOBALS['bdd'];
				$query = $bd->prepare('INSERT INTO signatures(IDP, Nom, Prenom, Email,Pays,Date,Heure) values(:idp, :nom, :prenom, :email, :pays,:date,:heure)'); 
				$query->execute(array('idp'=>$idp, 'nom'=>$nom, 'prenom'=>$prenom, 'email'=>$email, 'pays'=>$pays,'date'=>$date,'heure'=>$heure));
				echo "OK";
						}
	catch (Exception $e){
		echo "Erreur: NOT OK"." <br> Erreur :  . $e->getMessage()";
	} 


 
	    