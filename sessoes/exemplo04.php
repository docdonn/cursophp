<?php 
session_id("2uhgvdvncv8ptdrn33f1eerpv4");

require_once("config.php");
session_regenerate_id();
echo session_id();

var_dump($_SESSION);


 ?>