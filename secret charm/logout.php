<?php

//mawawala yung current sesssion 
session_destroy();
//mapupunta sa index.php which is yung sign in 
header("location: index.php");
?>