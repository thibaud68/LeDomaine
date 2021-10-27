<?php

include 'header.php';


?>
	<div class="container">
				<div class="row">
				<p><h2>Formulaire d'insertion</h2></p>
			</div>
<div class="row">

	   	<form method="post" action="ajoutPhoto.php" class="col-md-4  bordure">
	   	<label for="page_select">Choisir une page:</label>

		<select onchange="window.location.href = this.value"  name="page" id="page_select">
	   <option value="">Sélectionnez une page ici</option>
		    <option value="domaine.php?page=formulaireDomaine">Domaine</option>
		    <option value="evenement.php?page=formulaireEvenement">Evènement</option>
		    <option value="album.php?page=formulaireAlbum">Album</option>
		   
		    <?php 
            if ($_GET['page'] == "formulaireDomaine") {include("domaine.php");}
            if ($_GET['page'] == "formulaireEvenement") {include("evenement.php");}
 		
 

?>
		</select>
		<p><h3>Page album</h3></p>
	   		<p>

	        <label for="texte_photo">Votre texte :</label>
	        <input type="text" name="texte_photo" id="texte_photo" />
	        <select name="class_texte_photo" id="class_texte_photo">
		   
		    <option value="col-lg-offset-1 col-lg-6">sur une colonne gauche</option>
		     <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		  
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><br />
	        
	        <label for="nomFichierPhoto">Votre photo:</label>
	        <input type="text" name="nomFichierPhoto" id="nomFichierPhoto" />
	        <select name="class_photo" id="class_photo">
		   
		    <option value="col-lg-offset-1 col-lg-6">sur une colonne gauche</option>
		     <option value="col-lg-offset-6 col-lg-6">sur une colonne droite</option>
		  
		    <option value="col-lg-offset-1 col-lg-10 col-lg-offset-1">sur une ligne</option>
		   	</select><br />

	       

	        <input type="submit" value="valider"/>
	        </p>
		</form>
		</div>
	</div>

<?php

include 'footer.php';

?>