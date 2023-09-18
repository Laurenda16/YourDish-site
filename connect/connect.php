<?php
$con = new mysqli('localhost', 'root', '', 'YourDish');

if (!$con) {
    die(mysqli_error($con));
}
