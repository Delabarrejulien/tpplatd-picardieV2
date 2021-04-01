<?php
session_start();

require_once(dirname(__FILE__) . '/../models/User.php');

// definition de l'id par session


// Nettoyage de l'id passé en GET dans l'url
$id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));

if(!$id){
    header('location:/../views/templates/badHeader.php');
}
/*************************************************************/

// Appel à la méthode statique permettant de récupérer toutes les infos d'un user

$user = User::get($id);

/*************************************************************/

$select= new User();
$selectuser=$select->select($_SESSION['id']);


/* ************* AFFICHAGE DES VUES **************************/

include(dirname(__FILE__) . '/../views/templates/adminHeader.php');
    include(dirname(__FILE__) . '/../views/usersLog/adminViewUser.php');
include(dirname(__FILE__) . '/../views/templates/footer.php');

