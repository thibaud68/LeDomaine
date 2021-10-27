<?php

include 'Header.php';


?>

<div class="panel">
	<div id="" class="photo parallax" data-scroll-factor="3" data-mouse-factor="10"></div>
	<link src="Images/fond.jpg" rel="stylesheet"/>
	<div id="title" class="title">Le Domaine</div>
</div>
<div class="container">

<?php
$query = "SELECT * FROM photos ORDER BY id_photo ASC; ";
$req = $bdd->query($query);
while ($row = $req->fetch()) {
			
?>

				
				
	<img class="gallery_element lazy" src="Image/<?php echo $row['nomFichierPhoto']; ?>"/>

<?php
}
$req->closeCursor();
?>	
	
</div>


<?php

include 'Footer.php';

?>