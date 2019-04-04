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
Version 3
<br>
<?php echo "This pod IP is: ".$_SERVER['SERVER_ADDR'] ;
  date_default_timezone_set('Europe/Stockholm');
  $date = date('m/d/Y h:i:s a', time());
  echo $date ?>
<?php echo "This timestamp for the request was: ".$_SERVER['REQUEST_TIME'] ;?>
</h1>
</p>
</body>
</html>
