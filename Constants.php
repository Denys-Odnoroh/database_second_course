<?php
  // Константи бази даних
  require "rb.php";
  $server = "127.0.0.1";
  $login ="root";
  $pass ="";
 $name_db = "auto_parts_store";
 
 $link = mysqli_connect($server, $login, $pass, $name_db);
R::setup( 'mysql:host=localhost;dbname=auto_parts_store',
'root', '' );
if ($link == False)
{
 echo"Звязку немає";
}
session_start();
?>  
