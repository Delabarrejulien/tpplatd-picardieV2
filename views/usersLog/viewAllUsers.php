

<form action="" method="GET">

<input type="search" name="search" id="search" placeholder="Recherche..." value="<?=$s?>">
<input type="submit" value="Rechercher">

</form>

<table class="table">
<thead>
  <tr>
  <th scope="col" class="text">Prénom</th>
    <th scope="col" class="text">Pseudo</th>
    <th scope="col" class="text">Statut</th>
    <th scope="col" class="text">Voir</th>
  </tr>
</thead>
<tbody>

  <?php 
  $i=0;
  foreach($allUsers as $user) {
      $i++;
      ?>
      <tr>
      
      <td><?=htmlentities($user->firstname)?></td>
      <td><?=htmlentities($user->pseudo)?></td>
      <td><?=htmlentities($user->statut)?></td>
      
      
      <td>
        <a href="/controllers/adminViewUserCtrl.php?id=<?=htmlentities($user->id)?>"><i class="far fa-edit"></i></a>
    
      </td>
      </tr>
  <?php } ?>

</tbody>
</table>

<nav aria-label="...">
<ul class="pagination pagination-sm">
  

    <?php
    for($i=1;$i<=$nbPages;$i++){
      if($i==$currentPage){ ?> 
       <span class="visually-hidden text">Page</span>
          </span>
         
        <li class="page-item active" aria-current="page">
          <span class="page-link">
            <?=$i?> 
           
        </li>
  <?php } else { ?>
    <li class="page-item"><a class="page-link" href="?currentPage=<?=$i?>&s=<?=$s?>"><?=$i?></a></li>
  <?php } 
  }?>
</ul>
</nav>