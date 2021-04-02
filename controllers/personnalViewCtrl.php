<?php


session_start();

require_once(dirname(__FILE__) . '/../models/user.php');

$select= new User();
$selectuser=$select->select($_SESSION['id']);


include(dirname(__FILE__) . '/../views/templates/personnalheader.php');

include(dirname(__FILE__) . '/../views/usersLog/personnalView.php');

include(dirname(__FILE__) . '/../views/templates/footer.php');