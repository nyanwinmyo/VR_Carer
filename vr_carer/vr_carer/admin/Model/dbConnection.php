<?php
$hostname = "hosting-beyond-do-user-14484910-0.b.db.ondigitalocean.com";
$port = "25060";
$dbname = "vr_carer";
$username = "doadmin";
$password = "AVNS_odSp7G5IWykGCI5O0CB";
$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname",
    $username,
    $password
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
