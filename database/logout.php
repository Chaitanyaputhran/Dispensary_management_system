<?php
     session_start();
     //remove all the session variables
     session_unset();
//destroy
     session_destroy();

?>