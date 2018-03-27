<?php

require_once 'model/dao.php';
session_start();

$msgError = "";

if (filter_has_var(INPUT_POST, "save")) {
    $group = "";
    foreach ($_POST as $key => $value) {
        if (strpos($key, "person") !== FALSE) {
            if (!empty($group)) {
                $group .= ",";
            }
            $group .= filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING);
        } elseif ($key == "name") {
            $name = filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING);
        }
    }
    if (empty($group)) {
        $msgError = "Your group cannot be empty !";
    } elseif (empty($name)) {
        $msgError = "Your group name cannot be empty !";
    } else {
        addGroup($name, $group, $_SESSION["id"]);
    }
}

$actions = [];

$allActions = getAction();

while ($data = $allActions->fetch()) {
    $actions[] = $data['action'];
}
if (filter_has_var(INPUT_GET, "participants")){
    $participants = filter_input(INPUT_GET, "participants", FILTER_SANITIZE_STRING);
    $isGroup = true;
}
else{
    $isGroup = false;
}
include 'views/game.php';
?>
