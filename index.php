<head>
<title>
TEST
</title>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
</head>
<html> 
<body style="background-color: white">
<p>
<h1>
Version 2
<br>
<?php 
  echo "This pod IP is: ".$_SERVER['SERVER_ADDR'] ;
  echo "\n<br>" ;
  date_default_timezone_set('Europe/Stockholm');
  $date = date('Y/m/d H:i:s', time());
  echo "\nThe Server time is: " .$date ; ?>
</h1>
</p>
</body>
</html>
