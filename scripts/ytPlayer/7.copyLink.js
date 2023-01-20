if (streamkey != "none"){
    let linkButton = document.getElementById('link');
    linkButton.innerHTML = "Copy link";
    linkButton.onclick = function(){
        navigator.clipboard
        .writeText(window.location.href+"?id="+streamkey);
    }
}