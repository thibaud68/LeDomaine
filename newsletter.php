<?php

include 'header.php';

?>
	<div class="container">
		<div class="row">
<div class="col-md-4 col-xs-6 bordure">
	   	<form method="post" action="ajout_newsletter.php">
	   		<p>
	        <label for="nom">Votre nom :</label>
	        <input type="text" name="nom" id="nom" /><br />
	        
	        <label for="prenom">Votre prenom :</label>
	        <input type="text" name="prenom" id="prenom" /><br />

	        <label for="email">Votre email :</label>
	        <input type="email" name="email" id="email" /><br />

	        <input type="submit" value="valider"/>
	        </p>
		</form>
		</div>
	</div>
</div>
<?php

include 'footer.php';

?>