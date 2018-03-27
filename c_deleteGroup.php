<?php
require_once 'model/dao.php';
session_start();

deleteGroup($_GET['id']);
header('Location: c_account.php');

 ?>
