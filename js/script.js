var vid = document.getElementById("mammisvideo");


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



