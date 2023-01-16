///for some reason this method doesn't work :(

var script;
function linkScript(dir) {
    function topScript(scriptLink) {
        script = document.createElement('script');
        script.setAttribute('src', dir + scriptLink);
        document.head.appendChild(script);
    };

    function bottomScript(scriptLink) {
        script = document.createElement('script');
        script.setAttribute('src', dir + scriptLink);
        document.body.appendChild(script);
    };

    topScript("1.globalVariables.js");
    topScript("2.YtPlayer.js");
    topScript("3.videoURL.js");
    topScript("4.seek.js");
    topScript("5.checkRepeat.js");
}
