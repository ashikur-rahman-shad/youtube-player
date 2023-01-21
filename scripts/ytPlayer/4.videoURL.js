function changeURL() {

    url = document.getElementsByName("url")[0].value;

    if (url.includes(".com")) {

        url = url.slice(url.indexOf("v=") + 2);
        if (url.indexOf("&") > -1)
            url = url.slice(0, url.indexOf("&"));
        player.loadVideoById(url);
    }

    else if (url.includes(".be")) {

        url = url.slice(url.indexOf(".be") + 3);
        if (url.indexOf("?") > -1)
            url = url.slice(0, url.indexOf("?"));
    }

    //console.log(url)
    update("vidid=" + url + "&duration=0");
}
//https://www.youtube.com/watch?v=mATzn3YfnUQ