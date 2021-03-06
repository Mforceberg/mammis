<!doctype html>

<?php
include ("navigation.php");
?>
<html lang="da">
    <head>
        <title>Mammis Gelato | Lækker Italiensk Gelato</title>
        <meta name="description" content="Du kan altid kontakte Mammis Gelato enten over E-mail eller mobil.">
    </head>
<body>
    
    
    <!-- Div der indeholder kontakt content-->
    <div class="kontaktContent">
        
        <!-- Billede til venstre side af kontakt -->
        <img src="images/kontaktvenstre.png" alt="" class="col-sm-3 col-md-3 col-lg-3 hidden-xs">
        
        <!-- Billede med kontakt informationer -->
        <img src="images/kontaktmidt.png" alt="Mammis Gelatos kontakt informationer Ejer Helle Schmidt telefon +45 41 19 51 75 email hs@mammis.dk Butiksbestyrer Michelle Schmidt telefon +45 20 65 19 35 email ms@mammis.dk" class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-offset-1 col-xs-10">
        
        
        <!-- billede til højre side af kontakt -->
        <img src="images/kontakthoejre.png" alt="" class="col-sm-3 col-md-3 col-lg-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 hidden-xs">
    </div>

    
    <!-- Google maps funktion til at vise Mammis Gelatos lokation -->
<div id="map" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <script>
        function myMap() {
        var uluru = {lat: 56.158002, lng: 10.209147};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
        
    </script>
    </div>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5uvtZTaOc8TBaiojRZqjvw2rWPqu2ApU&callback=myMap"
  type="text/javascript"></script>
    <!-- Billede af kort hvor man finder Mammis Gelato --> 
    <!-- <img src="images/kontaktbund.png" alt="Kort hvor man finder Mammis Gelato adresse:  Rosensgade 34, Tv., 8000 Aarhus C, Danmark" class="col-sm-12 col-md-12 col-lg-12"> -->
</body>
</html>