<html>
<head>
<meta http-equiv="Content-Security-Policy" content="default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'">
        <script type="text/javascript" charset="utf-8" src="cordova-1.5.0.js"></script>      
        <script type="text/javascript" charset="utf-8">

            function onLoad()
            {
                  document.addEventListener("deviceready", onDeviceReady, true);
            }

            function exitFromApp()
             {
                navigator.app.exitApp();
             }

        </script>
</head>
<body style="margin: 0;" onload="onLoad();">
<br><br>
<center><img border="0" src="icon.png" /></center><br>
<center><h3><a href="index.html" style="text-decoration:none"><b>Refresh</b></a></h3></center>

<script type="text/javascript">
function checkNetConnection(){
 var xhr = new XMLHttpRequest();
 var file = "http://rama.xp3.biz/alkitab/load.png";
 var r = Math.round(Math.random() * 10000);
 xhr.open('HEAD', file + "?subins=" + r, false);
 try {
  xhr.send();
  if (xhr.status >= 200 && xhr.status < 304) {
   return true;
  } else {
   return false;
  }
 } catch (e) {
  return false;
 }
}
if(checkNetConnection()) {
    window.location = "http://rama.xp3.biz/alkitab/";
} else {
    alert("Tidak ada koneksi internet");
    window.location.history.go(-2)
}
</script>
</body>
</html>
