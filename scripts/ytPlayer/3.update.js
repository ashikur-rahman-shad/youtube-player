function update(argument) {
    if (streamkey != "none")
        fetch("backend/player/update.php?streamkey=" + streamkey + "&" + argument);
}
