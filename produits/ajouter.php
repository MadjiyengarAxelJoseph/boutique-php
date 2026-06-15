<?php

include '../includes/db.php';

if(isset($_POST['ajouter']))
{
    $libelle = $_POST['libelle'];
    $marque = $_POST['marque'];
    $categorie = $_POST['categorie'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO produits
    (libelle,marque,categorie,prix,quantite_stock)

    VALUES

    ('$libelle','$marque','$categorie','$prix','$stock')";

    mysqli_query($conn,$sql);

    header("Location:index.php");
    exit();
}

include '../includes/header.php';

?>

 <div class="form-container">

<h2 class="form-title">
Ajouter un produit
</h2>

<form method="POST">

<div class="form-grid">

<div class="form-group">
<label>Libellé</label>
<input type="text" name="libelle" required>
</div>

<div class="form-group">
<label>Marque</label>
<input type="text" name="marque" required>
</div>

<div class="form-group">
<label>Catégorie</label>
<input type="text" name="categorie" required>
</div>

<div class="form-group">
<label>Prix</label>
<input type="number" step="0.01" name="prix" required>
</div>

<div class="form-group full">
<label>Stock</label>
<input type="number" name="stock" required>
</div>

</div>

<div class="form-actions">
<button type="submit" name="ajouter">
Enregistrer le produit
</button>
</div>

</form>

</div>

<?php include '../includes/footer.php'; ?>