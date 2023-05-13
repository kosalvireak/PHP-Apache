<?php
$mysqli = new mysqli("localhost","root","","crudphp","3307");
if($mysqli->connect_error){
    exit("Error connecting to database");
}