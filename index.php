<?php

require_once 'model/dao.php';
session_start();

if (filter_has_var(INPUT_POST, "save")) {
    foreach ($_POST as $key => $value) {
        if (strpos($key, "person") !== FALSE) {
            $group += $value + ",";
        } elseif ($key == "name") {
            $name = $value;
        }
    }
    addGroup($name, $group);
}

$actions = [];

$allActions = getAction();

while ($data = $allActions->fetch()) {
    $actions[] = $data['action'];
}

include 'views/game.php';
?>
