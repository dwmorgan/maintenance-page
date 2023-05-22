<html>
<title>Maintenance Page</title>
<body>
<?php
  $urlRoot="http://169.254.169.254/latest/meta-data/";
  $instance = file_get_contents($urlRoot . 'instance-id');
  $publicip = file_get_contents($urlRoot . 'public-ipv4');
  $localip = file_get_contents($urlRoot . 'local-ipv4');
  $az = file_get_contents($urlRoot . 'placement/availability-zone');
  $region = file_get_contents($urlRoot . 'placement/region');
?>

<center>
<br>
<IMG SRC="https://raw.githubusercontent.com/dwmorgan/maintenance-page/img.png" ALT="Maintenance Page" width="600" height="600"><br></center>
<center><p style="font-family:verdana">We are currently recovering to another region. Please standby. Thank you!<b><?= $instance ?></b> in Availability Zone <b><?= $az ?></b>.</p></center>
<center><p style="font-family:verdana">Instance Region: <b><?= $region ?></b></p></center>
<center><p style="font-family:verdana">Instance Public IP: <b><?= $publicip ?></b></p></center>
<center><p style="font-family:verdana">Instance Private IP: <b><?= $localip ?></b></p></center>
