<?php

include '../includes/db.php';
include '../includes/header.php';

$id = $_GET['id'];

$sql = "

SELECT
commandes.id,
commandes.date_commande,
commandes.montant_total,

clients.nom,
clients.prenom,

produits.libelle,

ligne_commandes.quantite,
ligne_commandes.prix_unitaire

FROM commandes

INNER JOIN clients
ON commandes.client_id = clients.id

INNER JOIN ligne_commandes
ON commandes.id = ligne_commandes.commande_id

INNER JOIN produits
ON produits.id = ligne_commandes.produit_id

WHERE commandes.id=$id

";

$resultat =
mysqli_query($conn,$sql);

$data =
mysqli_fetch_assoc($resultat);

?>

<div class="facture">

    <div class="facture-header">

        <div>
            <h1 class="facture-title">
                FACTURE
            </h1>

            <p>
                Commande N°
                <?= $data['id']; ?>
            </p>
        </div>

        <div>
            <strong>BOUTIQUE AXEL</strong>
            <br>
            N'Djamena
            <br>
            Tél : 68 69 08 61
        </div>

    </div>

    <hr><br>

    <p>
        <strong>Client :</strong>
        <?= $data['nom']; ?>
        <?= $data['prenom']; ?>
    </p>

    <p>
        <strong>Date :</strong>
        <?= $data['date_commande']; ?>
    </p>

    <br>

    <table class="table">

        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix Unitaire</th>
        </tr>

        <tr>
            <td><?= $data['libelle']; ?></td>
            <td><?= $data['quantite']; ?></td>
            <td><?= $data['prix_unitaire']; ?> FCFA</td>
        </tr>

    </table>

    <div class="total-box">
        TOTAL :
        <?= number_format($data['montant_total'],0,' ',' '); ?>
        FCFA
    </div>

</div>

<br>

<a
class="btn"
href="pdf.php?id=<?= $id; ?>">

Télécharger PDF

</a>

<?php include '../includes/footer.php'; ?>