<?php
require_once 'model/dao.php';
session_start();

$propositions = getActionSugg();

if (filter_has_var(INPUT_POST, "validate")) {
}

if (filter_has_var(INPUT_POST, "delete")) {
  delActionSugg(2);
  //echo("<meta http-equiv='refresh' content='1'>");
}

include 'views/admin.php';
?>
