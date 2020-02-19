<?php
require "config.php";

$username = $_POST["login"];
$password = $_POST["password"];

if (!isset($userMock[$username])){
    echo "<b style=color:red> uzivatel neexistuje </b>";
    return;
}

$user = $userMock[$username];

if ($user["password"] == $password){
    setcookie("key", $user["key"]);
    header("location:administration.php");
} else {
    echo "<b style=color:red> nespravne heslo </b>";
}

//echo "Tvoje jmeno je: $username a heslo $password";

