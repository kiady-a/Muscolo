<?php
require_once 'model/dao.php';

$propositions = getActionSugg();

if (isset($_POST['validate'])) {
echo("<meta http-equiv='refresh' content='1'>");
}

include 'views/admin.php';
?>
