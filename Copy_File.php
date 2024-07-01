<?php
   $file = 'Hello.txt';
   $newfile = 'new.txt';
   if (!copy($file, $newfile)) {
      echo "failed to copy $file";
   } else {
      echo "copied $file into $newfile";
   }
?>