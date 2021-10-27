<?php
include 'connectbdd.php';

		$texte_photo= $_POST['texte_photo'];//on incremente $_POST a $designation
	        $nomFichierPhoto= $_POST['nomFichierPhoto'];//on incremente $_POST a $quantite
	      
	        $class_texte_photo = $_POST['class_texte_photo'];
	           $class_photo = $_POST['class_photo'];//on incremente $_POST a $quantite

	$bdd->exec("INSERT INTO photos VALUES(default,'".$nomFichierPhoto."','".$texte_photo."','".$class_photo."','".$class_texte_photo."');");//on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
			header('refresh: 0; URL=album.php');

?>