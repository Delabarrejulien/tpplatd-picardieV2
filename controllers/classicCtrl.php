<?php
session_start();

require_once(dirname(__FILE__) . '/../models/user.php');
require_once(dirname(__FILE__) . '/../models/cooking.php');











include(dirname(__FILE__) . '/../views/templates/headerCook.php');

include(dirname(__FILE__) . '/../views/recipes/classic.php');
  
include(dirname(__FILE__) . '/../views/templates/footer.php');