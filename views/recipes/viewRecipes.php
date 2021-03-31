

<h1 class="mb-4">En cuisine...</h1>
 
 <div class="card mb-3">
  
    <div class="card-body text">
       <h2 class="card-title text"><p><?= $cooking->name?></h2>

       <label for="categorie" class="text">Contient des produits a base de:</label>
       <p class="card-text text"><p><?= $cooking->categorie?></p>

       <label for="description"></label>
       <p class="card-text text"><p><?= $cooking->description?></p>

       <label for="ingredient"></label>
       <p class="card-text text"><p><?= $cooking->ingredient?></p>

       <label for="step"></label>
       <p class="card-text text"><p><?= $cooking->step?></p>
 
       <p class="card-text">
          <small class="text-muted text">Bon apppétit...</small>
       </p>
    </div>
    <img class="card-img" src="/../assets/img/ficelle-picarde.jpg" alt="la vrai ficelle picarde">
 </div
 
