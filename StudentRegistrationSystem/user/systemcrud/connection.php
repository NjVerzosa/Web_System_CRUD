<?php


//Attempt MySQL server connection. Assuming you are running MySQL wih default setting (user 'root' with no password).
$con = mysqli_connect("localhost","root","","registration_form");

//Check connection
if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>