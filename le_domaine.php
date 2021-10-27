<?php

include 'Header.php';


?>

<div class="panel">
	<div id="" class="photo parallax" data-scroll-factor="3" data-mouse-factor="10"></div>
	<link src="Images/fond.jpg" rel="stylesheet"/>
	<div id="title" class="title">Le Domaine</div>
</div>

<div id="container">
	<?php
				$query = "SELECT * FROM domaine ORDER BY id_domaine ASC; ";
				$req = $bdd->query($query);
				while ($row = $req->fetch()) {
					
					?>
		<div class="row">
				<div class="<?php echo $row['class_titre']; ?>">
					<div id="case">
						<p><?php echo $row['titre_domaine']; ?></p>
					</div>

		</div>
	<div class="row">
		<div class="<?php echo $row['class_photo']; ?>">
			<div id="case">
				<br/>
				<img src="Image/<?php echo $row['photo_domaine']; ?>"/>
			</div>
		</div>
		<div class="<?php echo $row['class_texte']; ?>">
			<div id="case2">
				<br/>
				<p><?php echo $row['texte_domaine']; ?></p>
			</div>
		</div>

	<div class="row">
		<div class="<?php echo $row['class_prix_domaine']; ?>">
			<div id="case3">
				<br/>
				<p><?php echo $row['prix_carte']; ?></p>
			</div>
		</div>
		<div><div class="row"><a href="modifLeDomaine.php?id_domaine=<?php echo $row['id_domaine'] . '&titre_domaine=' . $row['titre_domaine'] . '&photo_domaine=' . $row['photo_domaine'] . '&prix_carte=' . $row['prix_carte']; ?>" type="button" class="btn btn-warning">modifier</a>
			<a href="suppr_domaine.php?id_domaine=<?php echo $row['id_domaine']; ?>" type="button" class="btn btn-danger">supprimer</a>
		</div>
	</div>
		<?php
			}
			$req->closeCursor();
			?>	
</div>


<?php

include 'Footer.php';

?>