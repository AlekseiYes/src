<?php
$servername = "web-dev-env-main-db-1";
$username = "inquiry";
$password = "inquiry";
$dbname = "inquiry_data";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection Failed". $conn->connect_error);
}