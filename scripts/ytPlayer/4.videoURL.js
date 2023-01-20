function changeURL() {
    url = document.getElementsByName("url")[0].value;
    if (url.indexOf("v=")>-1)
        url = url.slice(url.indexOf("v=") + 2);
    if (url.indexOf("&")>-1)
        url = url.slice(0, url.indexOf("&"));
    player.loadVideoById(url);
    //console.log(url)
    update("vidid="+url+"&duration=0");
}
//https://www.youtube.com/watch?v=mATzn3YfnUQ