
    
    <div class="col-sm-8">
        <div class="card-block">
            <h6 class="m-b-20 p-b-5 b-b-default f-w-600 text"><?= $user->pseudo ?></h6>
            <div class="row">
                <div class="col-sm-6">
                    <p class="m-b-10 f-w-600 text">Email</p>
                    <h6 class="text-muted f-w-400"> <?= $user->mail ?></h6>
                </div>


                <div class="col-sm-6">
                    <p class="m-b-10 f-w-600 text">Anniversaire</p>
                    <h6 class="text-muted f-w-400"><?= $user->birthday ?></h6>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <p class="m-b-10 f-w-600 text">Nom</p>
                    <h6 class="text-muted f-w-400"><?= $user->name ?></h6>
                </div>

                <div class="col-sm-6">
                    <p class="m-b-10 f-w-600 text">Prénom</p>
                    <h6 class="text-muted f-w-400"><?= $user->firstname ?></h6>
                </div>

                <div class="col-sm-6">
                    <p class="m-b-10 f-w-600 text">Statut</p>
                    <h6 class="text-muted f-w-400"><?= $user->statut ?></h6>
                </div>

                <div class="col-sm-6 mt-4">
                    <a class="text"
                        href="/controllers/adminUpdateProfilCtrl.php?<?=$_SESSION['pseudo']?>">Modifer/compléter</a>
                </div>
            </div>
            
            </div>
        </div>
    </div>