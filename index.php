<!doctype html>

<!-- Includes the navigation -->
<?php
include ("navigation.php");
?>
<html lang="da">
    <head>
        <title>Mammis Gelato | Lækker Italiensk Gelato</title>
        <meta name="description" content="Hos Mammis Gelato sælger vi lækkert kvalitetsis.">
    </head>
<body>
    
    <!-- Container der fylder hele siden -->
<div class="full-width indexcontent">
    
    <!-- knap til at mute videoen -->
    <button class="mute-video" id="muteButton" onclick="enableMute();"></button>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 firstRow">
                
                <!-- Video -->
                <video id="mammisvideo" class="col-xs-12 col-md-9 col-lg-9 col-sm-9" autoplay loop muted>
                <source src="videos/mammismovie.mp4" type="video/mp4" id="myVideo">  
                </video>    
                
                <!-- Billede af aabningstider og studierabat -->
                <img src="images/aabningstider.jpg" alt="Mammis Gelatos åbningstider og studierabat" id="mammisAabning" class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
            </div>
            
        </div>
    
        <!-- Nedereste Billede -->
        <div class="row">
                <img src="images/linjebillede.jpg" alt="billede af forskellige produkter ved mammis gelato" id="indexBottom" class="col-lg-12 col-md-12 img-fluid img-full-width">
        </div>
</div>
    
<script src="js/script.js"></script>    
</body>
</html>


