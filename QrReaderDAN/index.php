<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>QR Reader.</title>
  </head>
  <body onload="load(); setimg();">
  <div id="main">
  <div id="mainbody">
  <div id="outdiv">
  </div>
  <div id="result"></div>
  </div></div>
  <canvas id="qr-canvas" width="800" height="600"></canvas> <!--Canvas to draw image -->
  </body>
</html>

<!--
En el script webqr.js se hace un append al canvas. (input). agregar el atributo camera, para permitir tomar una
foto y obtener el src o buscarla direcatmente
  -->

<script type="text/javascript" src="llqrcode.js"></script>
<script type="text/javascript" src="webqr.js"></script>
