document.addEventListener("offline", onOffline, false);
function onOffline() {
alert('No network connection');
return;
}
