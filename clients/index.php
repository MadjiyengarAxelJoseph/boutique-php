<?php

include '../includes/db.php';
include '../includes/header.php';

$sql = "SELECT * FROM clients ORDER BY id DESC";
$resultat = mysqli_query($conn, $sql);

?>

<h2>Liste des clients</h2>

<br>

<a href="ajouter.php" class="btn">Ajouter un client</a>

<br><br>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Ville</th>
            <th>Quartier</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        <?php while($client = mysqli_fetch_assoc($resultat)) : ?>

            <tr>
                <td><?= $client['id']; ?></td>
                <td><?= $client['nom']; ?></td>
                <td><?= $client['prenom']; ?></td>
                <td><?= $client['telephone']; ?></td>
                <td><?= $client['ville']; ?></td>
                <td><?= $client['quartier']; ?></td>

                <td>
                    <a href="modifier.php?id=<?= $client['id']; ?>">Modifier</a>

                    |

                    <a href="supprimer.php?id=<?= $client['id']; ?>"
                       onclick="return confirm('Supprimer ce client ?')">
                       Supprimer
                    </a>
                </td>
            </tr>

        <?php endwhile; ?>

    </tbody>
</table>

<?php include '../includes/footer.php'; ?>