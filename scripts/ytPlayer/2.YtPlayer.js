function onYouTubePlayerAPIReady() {
    player = new YT.Player('video', {
        events:{
            'onStateChange': onPlayerStateChange
        }});
}

function onPlayerStateChange() {
    duration = player.getDuration();
    document.getElementById("length").innerHTML=
    parseInt(duration/3600) + ":"
    + parseInt((duration%3600)/60) + ":" 
    + parseInt(player.getDuration()%60);
    document.getElementsByName("timeSlide")[0].max=duration-1;
    

    setInterval(function () {
        let currentTime=player.getCurrentTime();
        document.getElementById("currentTime").innerHTML=
        parseInt(currentTime/3600) + ":" +
        parseInt((currentTime%3600)/60) + ":" +
        parseInt(currentTime%60);
        document.getElementsByName("timeSlide")[0].value=currentTime;
    }, 1000);
}