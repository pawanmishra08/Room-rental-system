<?php
$server = "localhost";
$username ="root";
$pass="";
$dbname ="room-rental-system";
$conn = new mysqli($server, $username ,$pass, $dbname);
if($conn) {
    echo "";
} else {
    echo "not connected";
}

?>