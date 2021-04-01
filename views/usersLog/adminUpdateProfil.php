<h1>modifier un profil...</h1>
<form action="" method="POST">
    <fieldset>
        <br>
        <br>
        
        <div class="container col-8" >
            <br>
            <div class="form-group">
                <label id="text">Nom</label>
                <input type="text" value="<?= $name ?? '' ?>" class="form-control" title="en toutes lettres" name='name'
                    id="name" placeholder="Nom" pattern="[a-zA-ZÀ-ÿ\s]{2,20}" required>

            </div>

            <br>

            

            <div class="form-group">
                <label id="text">Prénom</label>
                <input type="text" value="<?= $firstname ?? '' ?>" class="form-control" title="en toutes lettres"
                    name='firstname' id="firstname" size="20" placeholder="Prénom" pattern="[a-zA-ZÀ-ÿ\s]{2,20}"
                    required>
            </div>

            <br>
           
            <div class="form-group">
                <label id="text">Date de naissance</label>
                <input type="date" value="<?= $birthday ?? '' ?>" class="form-control" name='birthday' id="birthday"
                    required>
            </div>

            <br>
            

            <label id="text">Pseudo</label>
            <input type="text" value="<?= $pseudo ?? '' ?>" class="form-control" name='pseudo' id="pseudo"
                placeholder="Pseudo" pattern="[A-Za-z-éèêëàâäôöûüç0-9\-\.]+" required>

            <br>
            
            <div class="form-group">
                <label id="text">email</label>
                <input type="email" value="<?= $mail ?? '' ?>" class="form-control" name='mail' id="mail"
                    placeholder="E-mail" required>
            </div>

            
            <div class="form-group">
                <label id="text">password</label>
                <input type="password" value="<?= $password ?? '' ?>" class="form-control" name='password' id="password"
                    placeholder="password" required>
            </div>

            <label id="number">Statut</label>
            <input type="text" value="<?= $statut ?? '' ?>" class="form-control" name='statut' id="statut"
                placeholder="statut" pattern="[0-9]+" required>

            <br>

            
        

        

            <input id=text type="submit" value="Valider" />
            <br>
            <br>

        </div>
    </fieldset>
</form>