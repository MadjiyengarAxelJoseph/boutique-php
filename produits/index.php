<?php

include '../includes/db.php';
include '../includes/header.php';

$sql = "SELECT * FROM produits ORDER BY id DESC";
$resultat = mysqli_query($conn, $sql);

?>

<h2>Liste des produits</h2>

<br>

<a href="ajouter.php" class="btn">Ajouter un produit</a>

<br><br>

<table class="table">

<tr>
    <th>ID</th>
    <th>Libellé</th>
    <th>Marque</th>
    <th>Catégorie</th>
    <th>Prix</th>
    <th>Stock</th>
    <th>Actions</th>
</tr>

<?php while($produit = mysqli_fetch_assoc($resultat)) : ?>

<tr>
    <td><?= $produit['id']; ?></td>
    <td><?= $produit['libelle']; ?></td>
    <td><?= $produit['marque']; ?></td>
    <td><?= $produit['categorie']; ?></td>
    <td><?= $produit['prix']; ?></td>
    <td><?= $produit['quantite_stock']; ?></td>

    <td>
        <a class="btn-edit"
        href="modifier.php?id=<?= $produit['id']; ?>">
        Modifier
        </a>

        <a class="btn-delete"
        href="supprimer.php?id=<?= $produit['id']; ?>"
        onclick="return confirm('Supprimer ce produit ?')">
        Supprimer
        </a>
    </td>

</tr>

<?php endwhile; ?>

</table>

<?php include '../includes/footer.php'; ?>