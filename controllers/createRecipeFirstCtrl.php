<?php
session_start();

require_once(dirname(__FILE__) . '/../utils/regex.php');

require_once(dirname(__FILE__) . '/../models/user.php');

require_once(dirname(__FILE__) . '/../models/cooking.php');



$id_user=intval($_SESSION['id']);




// Initialisation du tableau d'erreurs
$errorsArray = array();


//On ne controle que s'il y a des données envoyées 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // name
    // On verifie l'existance et on nettoie
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($name)){
        // On test la valeur
        $testRegex = preg_match(REGEX_STR_NO_NUMBER,$name);

        if($testRegex == false){
            $errorsArray['name_error'] = 'Merci de choisir un nom valide';
        }
    }else{
        $errorsArray['name_error'] = 'Le champ est obligatoire';
        
    }


     //description
    // On verifie l'existance et on nettoie
    $description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($description)){
        // On test la valeur
        $testRegex = preg_match(R_STRLONG,$description);

        if($testRegex == false){
            $errorsArray['description_error'] = 'Merci de choisir un nom valide';
        }
    }else{
        $errorsArray['description_error'] = 'Le champ est obligatoire';
        
    }
   

     //categorie
    // On verifie l'existance et on nettoie
    $categorie = trim(filter_input(INPUT_POST, 'categorie', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($categorie)){
        // On test la valeur
        $testRegex = preg_match(R_STRLONG,$categorie);

        if($testRegex == false){
            $errorsArray['categorie_error'] = 'Merci de choisir une categorie valide';
        }
    }else{
        $errorsArray['categorie_error'] = 'Le champ est obligatoire';
        
    }



         //ingredient
    // On verifie l'existance et on nettoie
    $ingredient = trim(filter_input(INPUT_POST, 'ingredient', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    


  

         //ingredient
    // On verifie l'existance et on nettoie
    $step = trim(filter_input(INPUT_POST, 'step', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));



     // Si il n'y a pas d'erreurs, on enregistre une recette.
     $cooking = new Cooking($name, $ingredient, $description, $step, $categorie);
 
     if(empty($errorsArray) ){
         $result = $cooking->createCooking($id_user);

 
       
         
         if($result===true){
             header('location: /../views/templates/greatHeader.php?');
         } else {
             // Si l'enregistrement s'est mal passé, on affiche à nouveau le formulaire de création avec un message d'erreur.
             $msgCode = $result;
         }
   
    }
}






include(dirname(__FILE__) . '/../views/templates/headerLight.php');

include(dirname(__FILE__) . '/../views/recipes/createRecipeFirst.php');
  
include(dirname(__FILE__) . '/../views/templates/footer.php');