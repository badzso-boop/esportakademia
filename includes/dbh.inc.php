<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "esportakademia";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

$servername1 = "localhost";
$dBUsername1 = "root";
$dBPassword1 = "";
$dBName1 = "esportakademia";

$mysqli = new mysqli($servername1, $dBUsername1, $dBPassword1, $dBName1);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
