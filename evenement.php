<?php

include 'header.php';

?>
	<div class="container">
		<div class="row">
			<div>
				<p><h2>Formulaire d'insertion</h2></p>
			</div>
			</div>
<div class="row">
	   	<form method="post" action="ajoutEvenement.php" class="col-md-4 bordure">
	   		   	<label for="page_select">Choisir une page:</label>

	   	<select onchange="window.location.href = this.value"  name="page" id="page">
		    <option value="">Sélectionnez une page ici</option>
		    <option value="domaine.php?page=formulaireDomaine">Domaine</option>
		    <option value="evenement.php?page=formulaireEvenement">Evènement</option>
		    <option value="album.php?page=formulaireAlbum">Album</option>
		   
		    <?php 

   
            if ($_GET['page'] == "formulaireDomaine") {include("domaine.php");}
      
 			if ($_GET['page'] == "formulaireAlbum") {include("album.php");}



?>
		</select>
		<p><h3>Page évènement</h3></p>
	   		<p>
	        <label for="titre_evenement">Votre titre de l'évenement:</label>
	        <input type="text" name="titre_evenement" id="titre_evenement" /> 	<select name="class_titre" id="class_titre">
		   
		    <option value="col-lg-offset-1 col-lg-6">sur une colonne gauche</option>
		     <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		  
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><br />
	        
	        <label for="affiche_evenement">Votre affiche de l'évènement:</label>
	        <input type="text" name="affiche_evenement" id="affiche_evenement" /><select name="class_affiche" id="class_affiche">
		   
		    <option value="col-lg-offset-1 col-lg-6">sur une colonne gauche</option>
		     <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		  
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><br />
 			 
 			  <label for="prix_evenement">Votre prix de l'évènement:</label>
	        <input type="number" name="prix_evenement" id="prix_evenement" /><select name="class_prix" id="class_prix">
		   
		    <option value="col-lg-offset-1 col-lg-6">sur une colonne gauche</option>
		     <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		   
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><br />

	        <label for="date_evenement">Votre date de l'évènement:</label>
	        <input type="date" name="date_evenement" id="date_evenement" /><select name="class_date" id="class_date">
		   
		    <option value="col-lg-offset-1 col-lg-6">sur une colonne gauche</option>
		       <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		   
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><br />

	        <label for="texte_evenement">Votre texte de l'évènement:</label>
	        <textarea type="text" name="texte_evenement" id="texte_evenement"></textarea><select name="class_texte" id="class_texte">
		   
		    <option value="col-lg-offset-1 col-lg-6">colonne gauche</option>
		    <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><
<br />
	        <input type="submit" value="valider"/>
	        </p>
		</form>
		</div>
	</div>

<?php

include 'footer.php';

?>