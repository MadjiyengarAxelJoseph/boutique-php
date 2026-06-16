<?php
include 'includes/header.php';
?>

<h2>Tableau de bord</h2>

<br>

<div class="cards">

    <div class="card">
        <h2>Clients</h2>
        <p>Gérer les clients de la boutique.</p>
        <br>
         <a href="clients/index.php" class="btn">
            Accéder
        </a>
    </div>

    <div class="card">
        <h2>Produits</h2>
        <p>Gérer les produits et le stock.</p>
        <br>
        <a href="produits/index.php" class="btn">
            Accéder
        </a>
    </div>

    <div class="card">
        <h2>Commandes</h2>
        <p>Créer et consulter les commandes.</p>
        <br>
        <a href="commandes/index.php" class="btn">
            Accéder
        </a>
    </div>

</div>

<?php
include 'includes/footer.php';
?>