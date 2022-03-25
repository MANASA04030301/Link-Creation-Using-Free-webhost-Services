<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"branch :");
    fwrite($file, $branch ."\n");
    fwrite($file,"message :");
    fwrite($file, $message ."\n");
    fclose($file);
    header("location: register.php");
 ?>
