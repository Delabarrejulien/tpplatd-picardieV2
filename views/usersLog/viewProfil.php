<div class="col-xl-6 m-auto col-md-12">
    <div class="card user-card-full">
        <div class="row m-l-0 m-r-0">
            <div class="col-sm-4 bg-c-lite-green user-profile">
                <div class="card-block text-center text-white">
                    <div class="m-b-25"> <img src="/assets/img/iconeProfil.jpg" alt="blasons eure, l'oise, somme">
                    </div>
                </div>
            </div>
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
                        <br>
                        <br>
                        <br>
                        <a class="text"
                            href="/controllers/updateProfilCtrl.php?<?=$_SESSION['pseudo']?>">Modifer/compléter</a>
                    </div>
                    <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="/assets/img/blasonFooter.jpg"  alt="blasons eure, l'oise, somme"> </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>