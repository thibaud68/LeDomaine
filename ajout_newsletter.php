<?php
include 'connectbdd.php';

		$nom= $_POST['nom'];//on incremente $_POST a $designation
	        $prenom= $_POST['prenom'];//on incremente $_POST a $quantite
	      
	        $email = $_POST['email'];
	     //on incremente $_POST a $quantite

	$bdd->exec("INSERT INTO photos VALUES(default,'".$nom."','".$prenom."','".$email."');");//on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
			header('refresh: 0; URL=album.php');

?>