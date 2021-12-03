<?php
$server="sql101.epizy.com";
$username="epiz_29526305";
$password="E3rMUXRj1v87tLn";
$dbname="epiz_29526305_bookrell";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){|
    die("Connection failed:".mysqli_connect_error());
}