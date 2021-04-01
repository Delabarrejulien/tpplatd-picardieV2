

<nav class="text navbar navbar-expand-md navbar-light bg-white">
        <a class="navbar-brand text" href="/controllers/adminHeaderCtrl.php">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">

                    <?php
                if(!empty($_SESSION['pseudo'])){
                    echo '

                <a class="nav-link dropdown-toggle text" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">'.$_SESSION['pseudo'].'</a>
                <div class="dropdown-menu">
                <a class="dropdown text" href="/../controllers/viewProfilCtrl.php">Mon profil</a>
                <br>
                <br>
                <a class="dropdown text" href="/../controllers/createRecipeFirstCtrl.php">Créer recette</a>
                <br>
                <br>
                <a class="dropdown text" href="/../controllers/viewMyRecipesCtrl.php">Mes recettes</a>
                <br>
                <br>
                <a class="dropdown text" href="/../controllers/signoutCtrl.php">Déconnexion</a>';
                    
                } else {
                    echo '<li class="nav-item"><a class="nav-link " href="/../controllers/loginCtrl.php">Connexion/inscription</a></li>';
                }
                ?>


        </div>
      
        </li>
        <li class="nav-item"><a class="nav-link text " href="/../controllers/viewAllUsersCtrl.php">les utilisateurs du site </a></li>
        <li class="nav-item"><a class="nav-link text " href="/../controllers/viewMyRecipesCtrl.php">Gérer les recettes du site </a></li>
        </ul>
</div>
</nav>


