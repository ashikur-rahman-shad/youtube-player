function seek(){
    let time = document.getElementsByName("timeSlide")[0].value;
    let currentTime=player.getCurrentTime();
    player.seekTo(parseInt(time));
}

function seekTo(){
    let time = document.getElementsByName("time")[0].value;
    player.seekTo(time);
}

function seekBackward(){
    let currentTime=player.getCurrentTime();
    let time = currentTime-10;
    if(time>0)
    player.seekTo(time);
}

function seekForward(){
    let currentTime=player.getCurrentTime();
    let time = currentTime+10;
    if(time<duration)
    player.seekTo(time);
}