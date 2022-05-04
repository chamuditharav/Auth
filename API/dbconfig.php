<?php

$con = new mysqli("localhost","root","","sample");

if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}


?>