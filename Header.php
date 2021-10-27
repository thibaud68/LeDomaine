<?php
include'connectbdd.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="text/php">
        <title>Le Domaine</title>
        <meta name="description" content="Portfolio">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=yes"/>
    
        <link
            rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
        <link rel="stylesheet" type="text/css" href="style.css">

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">

            
    </head>
    <header>
    <div class="container">
    <nav class = "navbar fixed-top  navbar-dark  navbar-expand-md ">
    
  <button class="navbar-toggler" type = "button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class = "collapse navbar-collapse" id = "navbarSupportedContent">
   
    <ul class = "navbar-nav">
    <li class = "nav-item">
        <a  class ="imageHome"   id = "Home" title = "Home" href = "Le_domaine.php?page=Accueil"><img src="Image/logo.png" width="100px" height="50px" alt="logo_le_domaine"/></a>
      </li>
      <li class = "nav-item">
                                <!--portfolio.php?page=contact--->
        <a class = "nav-link" id = "leDomaine" title = "leDomaine" href = "Le_domaine.php?page=Le_Domaine">Le Domaine</a>
      </li>
         <li class = "nav-item">
                                <!--portfolio.php?page=contact--->
        <a class = "nav-link" id = "evenementAnterieur" title = "evenementAnterieur" href = "#">Evènements antérieurs</a>
      </li>
            </li>
         <li class = "nav-item">
                                <!--portfolio.php?page=contact--->
        <a class = "nav-link" id = "evenementAvenir" title = "evenementAvenir" href = "Accueil.php?page=Accueil">Evènements à venir</a>
      </li>
           <li class = "nav-item">
                                <!--portfolio.php?page=contact--->
        <a class = "nav-link" id = "photos" title = "photos" href = "Les_photos.php?page=Les_photos">Photos</a>
      </li>
                 <li class = "nav-item">
                                <!--portfolio.php?page=contact--->
        <a class = "nav-link" id = "presse" title = "presse" href = "#">Presse</a>
      </li>

      <li class = "nav-item">
        <a class = "nav-link" id = "inscription" title = "inscription" href = "newsletter.php?page=Newsletter">Inscription</a>
      </li>
      
      <li class = "nav-item">
        <a class = "nav-link fa fa-facebook" id="linkedin" title = "linkedin" href = "http://www.linkedin.com/in/"></a>
                           
      </li>
      <li class = "nav-item">
        <a class = "nav-link fa fa-instagram" id = "twitter" title = "twitter" href = "http://www.twitter.com"></a>
                            
      </li>
    </ul>
  </div>
    </header>

    <body>
   