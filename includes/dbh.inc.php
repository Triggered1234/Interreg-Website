<?php

$servername = "localhost";
$dBUsername = "interreg_admin";
$dBPassword = "Y94dCu2q!8V?";
$dBName = "interreg_multi_login";

$conn = mysqli_connect ($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
   die("Connection Failed: ".mysqli_connect_error());
}
