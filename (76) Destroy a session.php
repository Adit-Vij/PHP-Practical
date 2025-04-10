
<?php

    // Starting session
    session_start();
     
    // Removing session variable
    if(isset($_SESSION["lastname"])){
        unset($_SESSION["lastname"]);
    }
    else{
        echo "Session already destroyed.";
    }
   echo"This Program is written by Adit Vij 0221BCA042";
?>