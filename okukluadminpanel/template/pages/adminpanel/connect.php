<?php

header("Access-Control-Allow-Origin: *");

$conn = mysqli_connect("localhost", "mehdi", "12345", "okukluadminpanel");
mysqli_select_db($conn,"okukluadminpanel");

?>