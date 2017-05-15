var vid = document.getElementById("mammisvideo");
var buttonClasses = document.getElementById("muteButton");

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



