<?php
session_start();

require_once(dirname(__FILE__).'/../models/cooking.php');
require_once(dirname(__FILE__).'/../models/user.php');


$errorArray = [];
$id = $_SESSION['id'];



$allCooking = Cooking::getAllMyCook($id);

if(!$allCooking){
    header('location:/../views/templates/badHeader.php');
}











include(dirname(__FILE__) . '/../views/templates/headerCook.php');

include(dirname(__FILE__) . '/../views/recipes/viewMyRecipes.php');
  
include(dirname(__FILE__) . '/../views/templates/footer.php');