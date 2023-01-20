var rate=1000;
if(streamkey!="none"){
    setInterval(function () {

        fetchContent(fetch_state, "backend/player/?id=" + streamkey);
        data = fetch_state.innerHTML;
        newState = JSON.parse(data);
    
        //console.log(newState);
    
        if (newState.incident > oldState.incident) {
            player.seekTo(newState.duration);
    
            if (newState.state == play) player.playVideo();
            else player.pauseVideo();
    
            if (newState.vid_id != player.getVideoData().video_id)
                player.loadVideoById(newState.vid_id);
    
    
            oldState.incident = newState.incident;
        }
    }, rate);
}