<?php
   session_start();
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'travinfo_db';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
?>