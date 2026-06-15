<?php
include '../includes/db.php';
include '../includes/header.php';

$sql = "SELECT commandes.id,
clients.nom,
commandes.date_commande,
commandes.montant_total

FROM commandes

INNER JOIN clients
ON commandes.client_id = clients.id

ORDER BY commandes.id DESC";

$resultat = mysqli_query($conn,$sql);
?>

<h2>Liste des commandes</h2>

<a href="ajouter.php" class="btn">
Nouvelle commande
</a>

<br><br>

<table class="table">

<tr>
    <th>N°</th>
    <th>Client</th>
    <th>Date</th>
    <th>Total</th>
    <th>Facture</th>
</tr>

<?php while($commande=mysqli_fetch_assoc($resultat)): ?>

<tr>
<td><?= $commande['id']; ?></td>
<td><?= $commande['nom']; ?></td>
<td><?= $commande['date_commande']; ?></td>
<td><?= $commande['montant_total']; ?> FCFA</td>

<td>
<a class="btn"
href="../factures/vue.php?id=<?= $commande['id']; ?>">
Voir
</a>
</td>

</tr>

<?php endwhile; ?>

</table>

<?php include '../includes/footer.php'; ?>