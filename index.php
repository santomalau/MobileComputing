<html>
<head>
<meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<?php
if (isset($_POST['LightON']))
{
shell_exec('arduino-cli upload -p /dev/ttyACM0 --fqbn arduino:avr:uno /home/santomalau/turn_on/');
}
if (isset($_POST['LightOFF']))
{
shell_exec('arduino-cli upload -p /dev/ttyACM0 --fqbn arduino:avr:uno /home/santomalau/turn_off/');
}
?>

<form method="post">
<button class="btn" name="LightON">Light ON</button>&nbsp;
<button class="btn" name="LightOFF">Light OFF</button><br><br>
<!-- <button class="btn" name="PlaySong">Play a random track</button><br>
-->
</form> 


</html>
