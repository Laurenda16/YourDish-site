<?php
$con = new mysqli('localhost', 'root', '', 'yourdish');

if (!$con) {
    die(mysqli_error($con));
}
