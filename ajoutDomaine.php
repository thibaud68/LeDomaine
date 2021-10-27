<?php
include 'connectbdd.php';

			$titre_domaine= $_POST['titre_domaine'];//on incremente $_POST a $designation
	        $photo_domaine= $_POST['photo_domaine'];//on incremente $_POST a $quantite
	        $prix_carte = $_POST['prix_carte'];//on incremente $_POST a $quantite
	       	$class_titre= $_POST['class_titre'];
	       	 $class_photo= $_POST['class_photo'];
	   	 	$class_prix_domaine= $_POST['class_prix_domaine'];
	   	 	 	 $texte_domaine= $_POST['texte_domaine'];
	   	 	 	  	 $class_texte_domaine= $_POST['class_texte_domaine'];

	$bdd->exec("INSERT INTO domaine VALUES(default,'".$titre_domaine."','".$photo_domaine."',".$prix_carte.",'".$class_titre."','".$class_photo."','".$class_prix_domaine."','".$texte_domaine."','".$class_texte_domaine."');");//on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
			//header('refresh: 0; URL=domaine.php');


?>