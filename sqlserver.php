<?php
$host ="sqlserver"; 
$username ="sa";
$password ="yourStrong(!)Password";
$database ="test";

mssql_connect($host, $username, $password);
mssql_select_db($database);
?>
