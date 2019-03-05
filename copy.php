<?php
     $file = 'C:\xampp\htdocs\xampp\Uploading-files-to-Google-Drive-with-PHP-master\encrypted.txt';
     $newfile = 'C:\xampp\htdocs\xampp\Uploading-files-to-Google-Drive-with-PHP-master\files\encrypted.txt';
     if(!copy($file,$newfile))
     {
        // echo "failed to copy $file";
     }
     else
     {	
//         echo "copied $file into $newfile\n";
     }
header("location:drive.php");
?>