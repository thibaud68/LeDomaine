<!DOCTYPE html>

<?php

include 'Header.php';

?>
<html>
	<head>
    	<meta charset="UTF-8">
    	<meta name="description" content="text/html">
    	<title>Connexion</title>
    	<meta name="description" content="description pour le moteur de recherche">
      	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   		<link rel="stylesheet" href="style.css"/>
	</head>
	<body background="Images/fond-2.jpg">
    	<div class="logo">
    		<a href="http://localhost/code/Accueil.php">
    			<div class=zoom>
 				<div class=image>
    					<img src="Images/Logo.png" title="Retour accueil" />
    				</div>
				</div>
    		</a>
		</div>
    <main>
  		<div class="connexion" >
        	<div class="row">
            	<form  method="POST" action="valideconnexion.php">
            		<p>
            			<h1> Connexion </h1>
                    		<label> Login: </label><input type="text" name="pseudo" id="pseudo" placeholder="identifiant"/><br>
                    		<label for="login"> Password: </label><input type="password" name="password" id="password" placeholder="mot de passe"/><br><br>
                    		<input type="submit" class="btn-success btn-lg center" value="Valider"/>
                    </p>          	
                </form>
            </div>          
        </div>         
    </main>
	</body>
</html>

<?php

include 'Footer.php';

?>