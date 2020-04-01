<?php
    try
    {
       $newURL = '../';
       $txt1 = $_POST['txt1'];
       $txt2 = $_POST['txt2'];
       $cmd = "ComputerToArduinoCLI.exe ";
       //$txt1 = "hola";
       //$txt2 = "hola";
        exec($cmd."  \"".$txt1."\" \"".$txt2."\"");
       
       header('Location: '.$newURL);
    }
    catch(Exception $e)
    {
        printf ("Upss algo mal salio".$e);
    }
    
?>