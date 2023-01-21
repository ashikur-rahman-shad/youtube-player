response.setHeader("Cache-Control", "no-cache, no-store, must-revalidate");
response.setHeader("Pragma", "no-cache");
response.setDateHeader("Expires", 0);

var website="https://arstrx.com/yt/";
var player, duration, url;
const play = 1, pause = 2;
var oldState = { incident:  '2023-01-16 08:01:30'};

var newState =
{
    owner:0,
    incident: new Date().toLocaleString(),
    vid_id: "PEwJ9VIlNgM",
    duration: 0,
    state: 1
};
var fetch_state=document.getElementById("newState");
const user = "random";
var data = fetch_state.innerHTML;