var player, duration, url;
const play = 1, pause = 2;
var oldState = { incident: new Date().toLocaleString() };

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