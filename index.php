<?php
include ("navigation.php");
?>
<button class="mute-video" id="muteButton" onclick="enableMute();">toggle</button> 

<div class="full-width indexcontent">
      <div class="row">  
        <video id="mammisvideo" class="col-lg-10 col-md-10" autoplay loop muted>
        <source src="videos/mammismovieworking.mp4" type="video/mp4" id="myVideo">  
        </video>     
          
        <img src="images/aabningstider.jpg" alt="mammis gelatos åbningstider" class="col-lg-2 col-md-2 img-fluid" id="mammisaabning">
    </div>
    <div class="row">
            <img src="images/linjebillede.jpg" alt="billede af forskellige produkter ved mammis gelato" class="col-lg-12 col-md-12 img-fluid img-full-width">

    </div>
</div>
    
<script src="js/script.js"></script>    
</body>
</html>


