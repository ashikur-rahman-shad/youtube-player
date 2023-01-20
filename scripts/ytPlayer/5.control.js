function playVid() {
    player.playVideo();
    update("state=1&duration="+player.getCurrentTime());
}

function pauseVid() {
    player.playVideo();
    player.pauseVideo();
    update("state=2&duration="+player.getCurrentTime());
}

function stopVid() {
    player.playVideo();
    player.pauseVideo();
    player.seekTo(0);
    update("state=2&duration=0");
}

function seek() {
    let time = document.getElementsByName("timeSlide")[0].value;
    player.seekTo(parseInt(time));
    update("duration=" + parseInt(time));
}

function seekTo() {
    let time = document.getElementsByName("time")[0].value;
    player.seekTo(time);
    update("duration=" + parseInt(time));
}

function seekBackward() {
    let currentTime = player.getCurrentTime();
    let time = currentTime - 10;
    if (time > 0)
        player.seekTo(time);
    update("duration=" + parseInt(time));
}

function seekForward() {
    let currentTime = player.getCurrentTime();
    let time = currentTime + 10;
    if (time < duration)
        player.seekTo(time);
    update("duration=" + parseInt(time));
}