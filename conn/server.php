<?php


//asli
$server = "sql113.epizy.com";
$uname = "epiz_30118477";
$password = "h0xHEf6YKvKn";
$db = "epiz_30118477_cdtproxim";

//coba
$server = "localhost";
$uname = "root";
$password = "";
$db = "cdt";

$conn = mysqli_connect($server, $uname, $password, $db);

if (!$conn) {
    echo "Connection Failed!";
}
