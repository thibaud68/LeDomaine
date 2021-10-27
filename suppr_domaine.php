<?php
include 'connectbdd.php';
if (isset($_GET['id_domaine'])) {
$Id_Partenaires = $_GET['id_domaine'];
//notre variable q qui et envoyer
$bdd->exec("DELETE FROM domaine WHERE id_domaine = '".$id_domaine."'");
     header('refresh: 0; URL=le_domaine.php');
}
?>