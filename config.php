<?php 

$server = "localhost"; // server db
$user = "root"; // user db
$pass = ""; // pass db
$database = "uts"; // nama db

$url = explode("/", $_SERVER['REQUEST_URI']);
$jml = count($url);
$direktoritoken = "";
$direktori="";

for ($i = 1; $i < $jml - 2; $i++) {
    $direktoritoken = $direktoritoken . "/" . $url[$i];
}

for ($i = 1; $i < $jml - 1; $i++) {
    $direktori = $direktori . "/" . $url[$i];
}


//$direktori = "/UTS PEMWEB"; // untuk mengganti direktori

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>