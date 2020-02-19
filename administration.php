<?php
require "config.php";

if (!isset($_COOKIE["key"])){
    echo "<b style='color:red'> nice try </b>";
    return;
}

$key = $_COOKIE["key"];

foreach ($userMock as $user) {
    if ($user["key"] == $key) {
        $currentUser = $user;
        break;
    }
}

if (!isset($currentUser)) {
    echo "<b style='color:red'> nice try </b>";
    return;
}
echo "aktualni uzivatel je:" . $currentUser["Name"];

?>