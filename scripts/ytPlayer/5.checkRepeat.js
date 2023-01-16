setInterval(function () {
    if(newState.incident>oldState.incident){
        if(user!=newState.user){
            player.seekTo(newState.playtime);
            if(newState.state==play)
                player.playVideo();
            else
                player.pauseVideo()
            

        }
        oldState.incident=newState.incident;
    }
}, 2000);