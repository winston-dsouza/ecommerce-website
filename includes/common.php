<?php
$con=mysqli_connect("localhost","root","","ecommerce");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
