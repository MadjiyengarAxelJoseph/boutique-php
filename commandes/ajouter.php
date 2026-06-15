<?php

include '../includes/db.php';

$clients = mysqli_query($conn,"SELECT * FROM clients");
$produits = mysqli_query($conn,"SELECT * FROM produits");

if(isset($_POST['valider']))
{
    $client_id = $_POST['client_id'];
    $produit_id = $_POST['produit_id'];
    $quantite = $_POST['quantite'];

    $reqProduit =
    mysqli_query(
    $conn,
    "SELECT * FROM produits WHERE id=$produit_id"
    );

    $produit =
    mysqli_fetch_assoc($reqProduit);

    $prix = $produit['prix'];

    $total = $prix * $quantite;

    mysqli_query(
    $conn,
    "INSERT INTO commandes
    (client_id,montant_total)
    VALUES
    ($client_id,$total)"
    );

    $commande_id =
    mysqli_insert_id($conn);

    mysqli_query(
    $conn,
    "INSERT INTO ligne_commandes
    (commande_id,produit_id,
    quantite,prix_unitaire,sous_total)

    VALUES

    ($commande_id,
    $produit_id,
    $quantite,
    $prix,
    $total)"
    );

    mysqli_query(
    $conn,
    "UPDATE produits
    SET quantite_stock=
    quantite_stock-$quantite
    WHERE id=$produit_id"
    );

    header(
    "Location:index.php"
    );

    exit();
}

include '../includes/header.php';
?>

<h2>Nouvelle commande</h2>

<form method="POST">

<label>Client</label>

<select name="client_id">

<?php while($c=mysqli_fetch_assoc($clients)): ?>

<option value="<?= $c['id']; ?>">
<?= $c['nom']; ?>
<?= $c['prenom']; ?>
</option>

<?php endwhile; ?>

</select>

<br><br>

<label>Produit</label>

<select name="produit_id">

<?php while($p=mysqli_fetch_assoc($produits)): ?>

<option value="<?= $p['id']; ?>">

<?= $p['libelle']; ?>

(Stock :
<?= $p['quantite_stock']; ?>)

</option>

<?php endwhile; ?>

</select>

<br><br>

<label>Quantité</label>

<input type="number"
name="quantite"
required>

<br><br>

<button
type="submit"
name="valider"
class="btn">

Valider

</button>

</form>

<?php include '../includes/footer.php'; ?>