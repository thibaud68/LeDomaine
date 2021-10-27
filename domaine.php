<?php

include 'header.php';

?>
	<div class="container">
				<div class="row">
				<p><h2>Formulaire d'insertion</h2></p>
			</div>
<div class="row">

	   	<form method="post" action="ajoutDomaine.php" class="col-md-4  bordure">
	   		   	<label for="page_select">Choisir une page:</label>
	   				<select onchange="window.location.href = this.value"  name="page" id="page_select">
	   			   <option value="">Sélectionnez une page ici</option>
		    <option value="domaine.php?page=formulaireDomaine">Domaine</option>
		    <option value="evenement.php?page=formulaireEvenement">Evènement</option>
		    <option value="album.php?page=formulaireAlbum">Album</option>
		   
		    <?php 

   
            if ($_GET['page'] == "formulaireEvenement") {include("evenement.php");}
 			if ($_GET['page'] == "formulaireAlbum") {include("album.php");}

 
?>
		</select>
		<p><h3>Page domaine</h3></p>
	   		<p>
	        <label for="titre_domaine">Votre titre de domaine :</label>
	        <input type="text" name="titre_domaine" id="titre_domaine" />
	        <select name="class_titre" id="class_titre">
		   
		    <option value="col-lg-offset-1 col-lg-6">sur une colonne gauche</option>
		     <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		  
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select>
		   
		   <br />
	        
	        <label for="photo_domaine">Votre photo de domaine :</label>
	        <input type="text" name="photo_domaine" id="photo_domaine" />
	        <select name="class_photo" id="class_photo">
		   
		    <option value="col-lg-offset-1 col-lg-6">sur une colonne gauche</option>
		     <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		  
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><br />

	        <label for="prix_carte">Votre prix de la carte :</label>
	        <input type="number" name="prix_carte" id="prix_carte" />
	        <select name="class_prix_domaine" id="class_prix_domaine">
		   
		    <option value="col-lg-offset-1 col-lg-6">sur une colonne gauche</option>
		     <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		  
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><br />

		   	 <label for="texte_evenement">Votre texte de l'évènement:</label>
	        <textarea type="text" name="texte_domaine" id="texte_domaine"></textarea><select name="class_texte_domaine" id="class_texte_domaine">
		   
		    <option value="col-lg-offset-1 col-lg-6">colonne gauche</option>
		    <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><

	        <input type="submit" value="valider"/>
	        </p>
		</form>
		</div>
	</div>

<?php

include 'footer.php';

?>