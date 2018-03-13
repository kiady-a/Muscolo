<?php
require_once 'model/dao.php';

$propositions = getActionSugg();

if (filter_has_var(INPUT_POST, "validate")) {
}

if (filter_has_var(INPUT_POST, "delete")) {
  delActionSugg(4);
  //echo("<meta http-equiv='refresh' content='1'>");
}

include 'views/admin.php';
?>
