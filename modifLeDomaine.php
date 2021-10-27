<?php
include_once('connectbdd.php');
include_once('header.php');

?>
<div class="container">
	<div class="row">
		<div class ="col-md-offset-1 col-md-10">
  <form id="lastCase" action="Valid_modifDomaine.php" method="post">

         
            <input class="input-group-field" name="id_domaine" type='hidden' value="<?php echo $_GET['id_domaine']; ?>"><br/>
            Titre de la page Domaine:<br/>
            <input class="input-group-field" name="titre_domaine" type="text" value="<?php echo $_GET['titre_domaine']; ?>"><br/>
            Photo de la page Domaine:<br/>
            <input type="text" name="photo_domaine" value="<?php echo $_GET['photo_domaine']; ?>"><br>

            Texte de la page Domaine:<br/>
            <textarea type="text" name="texte_domaine" value="<?php echo $_GET['texte_domaine']; ?>">
           	</textarea><br/>
            Prix carte:<br/>
            <input type="text" name="prix_carte" value="<?php echo $_GET['prix_carte']; ?>"><br>
          </div>
      </div>
      </div>
      <div class="row">
      	<div class ="col-md-offset-2 col-md-8">
      <button type="submit" class="btn btn-primary btn-sm">Envoyer</a></button>
      <button type="submit" href="le_domaine.php" class="btn btn-primary btn-sm"> Retour</a></button>
 </div>
</div>
      </form>

  </div>
</div>
<?php
include 'Footer.php';
?>