<?php
include ("navigation.php");
?>
<html>
<body>
<div class="full-width indexcontent">
    <button class="mute-video" id="muteButton" onclick="enableMute();"></button>
          <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 firstRow">
                <video id="mammisvideo" autoplay loop muted>
                <source src="videos/mammismovieworking.mp4" type="video/mp4" id="myVideo">  
                </video>    
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">
                <img src="images/aabningstider.jpg" alt="mammis gelatos åbningstider" id="mammisAabning" class="">
            </div>
            
        </div>
        <div class="row">
                <img src="images/linjebillede.jpg" alt="billede af forskellige produkter ved mammis gelato" class="col-lg-12 col-md-12 img-fluid img-full-width">
        </div>
</div>
    
<script src="js/script.js"></script>    
</body>
</html>


