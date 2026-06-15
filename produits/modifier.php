<?php

include '../includes/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM produits WHERE id=$id";
$resultat = mysqli_query($conn,$sql);

$produit = mysqli_fetch_assoc($resultat);

if(isset($_POST['modifier']))
{
    $libelle = $_POST['libelle'];
    $marque = $_POST['marque'];
    $categorie = $_POST['categorie'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];

    $sql = "UPDATE produits SET

    libelle='$libelle',
    marque='$marque',
    categorie='$categorie',
    prix='$prix',
    quantite_stock='$stock'

    WHERE id=$id";

    mysqli_query($conn,$sql);

    header("Location:index.php");
    exit();
}

include '../includes/header.php';

?>

<h2>Modifier Produit</h2>

<form method="POST">

<input type="text"
name="libelle"
value="<?= $produit['libelle']; ?>"
required>

<br><br>

<input type="text"
name="marque"
value="<?= $produit['marque']; ?>"
required>

<br><br>

<input type="text"
name="categorie"
value="<?= $produit['categorie']; ?>"
required>

<br><br>

<input type="number"
step="0.01"
name="prix"
value="<?= $produit['prix']; ?>"
required>

<br><br>

<input type="number"
name="stock"
value="<?= $produit['quantite_stock']; ?>"
required>

<br><br>

<button class="btn"
type="submit"
name="modifier">
Modifier
</button>

</form>

<?php include '../includes/footer.php'; ?>