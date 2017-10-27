<?php 
// Function connexion à la BDD

class connexion{

 	private $bdd;
 	protected $resultSelect= array();

	function __construct() {
		$this->bdd = new PDO('mysql:host=localhost;dbname=vietagrimpe', 'root', '');
		//echo 'connexion BDD réussi';
	}

	function selectQuery($selectQuery){
		$resultSelect= $this->bdd->query($selectQuery)->fetch(PDO::FETCH_ASSOC);
		var_dump($resultSelect);
		return $resultSelect;
	}

}
?>