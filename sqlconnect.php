<?php
 
    $conn = mysqli_connect("localhost","root","","htmlform"); 

    if(mysqli_connect_error()){
      die("Not connected to MySQL Database. Error! :("."<br>");
    }

?>