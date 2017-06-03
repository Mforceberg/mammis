//variabel der tager fat i videoen
var vid = document.getElementById("mammisvideo");


//funkition til at mute videoen
function enableMute() {
 if (vid.muted === true) {
    vid.muted = false;
 }
 else
 {
     vid.muted = true;
 }
    document.getElementById("muteButton").classList.toggle("unmute-video");
}
