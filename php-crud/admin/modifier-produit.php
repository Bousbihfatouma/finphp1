<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $admin=true;
  include '../includes/_head.php'; 
  ?>
</head>
<body>
  <?php include '../includes/_navbar.php'; ?>
  <main class="container-lg bg-white py-4">
    <h1>modifier un produit</h1>
     <?php
    require_once '../core/connexion.php';
    
        $sql = "SELECT * FROM product WHERE id =" . $_GET['id'];
        //3. Exécution de la requête SQL
        $query = mysqli_query($connexion, $sql);
        //4. Récupération des données
        $produit = mysqli_fetch_array($query);
     ?>
    <div class="row">
        <div class="col12 col-md-3">
        <img src="../images/<?php echo $produit['image_name']; ?>" alt="" class="img-fluid">
        </div>
        <div class="col-12 col-md-9">

   
   
    <form action="../core/admin-product.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control" required value= "<?php echo $produit['nom']; ?>"
      </div>
      <div class="form-groupe">
      <label for="description">Description :</label>
      <textarea name="description" id="description" rows="5" class="form-control"><?php echo $produit['description'];?></textarea>
      </div>
      <div class="form-group">
        <label for="prix">Prix :</label>
        <input type="number" name="prix" id="prix" class="form-control" value="<?php echo $produit['prix'];?>">
      </div>
      <div class="form-group">
        <label for="image">Image :</label>
        <input type="file" name="image" id="image" class="form-control">
      </div>
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="id" value="<?php  echo $produit['id']; ?>">
      <button type="submit" class="btn btn-success mt-3">Modifier</button>
    </form>
    </div>
</div>

    </main>
</body>
<?php include '../includes/_js.php';?>
</html>











