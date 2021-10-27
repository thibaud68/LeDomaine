<?php
include 'connectbdd.php';

		$titre_evenement= $_POST['titre_evenement'];//on incremente $_POST a $designation
	        $affiche_evenement= $_POST['affiche_evenement'];//on incremente $_POST a $quantite
	        $date_evenement =$_POST['date_evenement'];
	        $prix_evenement = $_POST['prix_evenement'];//on incremente $_POST a $quantite
	         $texte_evenement = $_POST['texte_evenement'];
  			
  			$class_affiche= $_POST['class_affiche'];
  			$class_prix= $_POST['class_prix'];
  			$class_texte= $_POST['class_texte'];
  			$class_date= $_POST['class_date'];
  			$class_titre= $_POST['class_titre'];


	$bdd->exec("INSERT INTO evenements VALUES(default,'".$affiche_evenement."',".$prix_evenement.",'".$texte_evenement."','".$class_affiche."','".$class_prix."','".$class_texte."','".$titre_evenement."','".$class_titre."','".$date_evenement."','".$class_date."');");//on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 


		
		header('refresh: 0; URL=evenement.php');


?>