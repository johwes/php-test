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
Version 5
<br>
<?php 
  echo "This pod IP is: ".$_SERVER['SERVER_ADDR'] ;
  echo "\n<br>" ;
  date_default_timezone_set('Europe/Stockholm');
  $date = date('Y/m/d H:i:s', time());
  echo "\nThe Server time is: " .$date ;
  echo "\n<br>" ;
  echo "\n<br>" ;
  foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
  }

  echo "\n<br>" ;

  foreach ($_COOKIE as $key=>$val)
  {
    echo $key.' is '.$val."<br>\n";
  }

  echo "<br>";
  echo "Message in HELLO environment is: " .getenv("HELLO");
  ?>
</h1>
</p>
</body>
</html>
