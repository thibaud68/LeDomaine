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
				$query = "SELECT * FROM evenements ORDER BY id_evenement ASC; ";
				$req = $bdd->query($query);
				while ($row = $req->fetch()) {
					$FR_Date = date("d-m-y", strtotime($row['date_evenement']));
					?>
		<div class="row">
				<div class="<?php echo $row['class_titre']; ?>">
					<div id="case">
						<p><?php echo $row['titre_evenement']; ?></p>
					</div>

		</div>
	<div class="row">
		<div class="<?php echo $row['class_affiche']; ?>">
			<div id="case">
				<br/>
				<img src="Image/<?php echo $row['affiche_evenement']; ?>"/>
			</div>
		</div>
		<div class="<?php echo $row['class_texte']; ?>">
			<div id="case2">
				<br/>
				<p><?php echo $row['texte_evenement']; ?></p>
			</div>
		</div>

	<div class="row">
		<div class="<?php echo $row['class_prix']; ?>">
			<div id="case3">
				<br/>
				<p><?php echo $row['prix_evenement']; ?></p>
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