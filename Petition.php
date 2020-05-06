<?php
	
	try{
		$bdd = new PDO('mysql:host=localhost:3306;dbname=petition;charset=utf8', 'root', '');
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
						}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	} 
	 class Petition
	 {
	 	public $idP;
	 	public $nom;
	 	public $prenom;
	 	public $pays;
	 	public $date;
	 	public $heure;

	 
	 	public static function getAll(){
	 		
	 		$bd = $GLOBALS['bdd'];
    		$query =  $bd->query('SELECT * FROM petitions');

    		return $query;
	 	}
	 }
 ?>