<?php
include ("navigation.php");
?>
<html>
<body>
    
<div class="full-width indexcontent">
    <button class="mute-video hidden-xs" id="muteButton" onclick="enableMute();"></button>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 firstRow">
                <video id="mammisvideo" class="col-xs-12 col-md-9 col-lg-9 col-sm-9" autoplay loop muted>
                <source src="videos/mammismovie.mp4" type="video/mp4" id="myVideo">  
                </video>    
                
                <img src="images/aabningstider.jpg" alt="mammis gelatos åbningstider" id="mammisAabning" class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
            </div>
            
        </div>
        <div class="row">
                <img src="images/linjebillede.jpg" alt="billede af forskellige produkter ved mammis gelato" id="indexBottom" class="col-lg-12 col-md-12 img-fluid img-full-width">
        </div>
</div>
    
<script src="js/script.js"></script>    
</body>
</html>


