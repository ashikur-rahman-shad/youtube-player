var player, duration, url;
const play = 1, pause = 2;
var oldState = { incident: new Date().toLocaleString() };

var newState =
{
    incident: new Date().toLocaleString(),
    user: "",
    playtime: 0,
    state: 1
};

const user = "random";