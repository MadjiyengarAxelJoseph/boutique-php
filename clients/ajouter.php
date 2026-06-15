<?php

include '../includes/db.php';

if(isset($_POST['ajouter']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $ville = $_POST['ville'];
    $quartier = $_POST['quartier'];

    $sql = "INSERT INTO clients
            (nom, prenom, telephone, ville, quartier)
            VALUES
            ('$nom','$prenom','$telephone','$ville','$quartier')";

    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}

include '../includes/header.php';
?>

  <div class="form-container">

<h2 class="form-title">
Ajouter un client
</h2>

<form method="POST">

<div class="form-grid">

<div class="form-group">
<label>Nom</label>
<input type="text" name="nom" required>
</div>

<div class="form-group">
<label>Prénom</label>
<input type="text" name="prenom" required>
</div>

<div class="form-group">
<label>Téléphone</label>
<input type="text" name="telephone" required>
</div>

<div class="form-group">
<label>Ville</label>
<input type="text" name="ville" required>
</div>

<div class="form-group full">
<label>Quartier</label>
<input type="text" name="quartier" required>
</div>

</div>

<div class="form-actions">
<button type="submit" name="ajouter">
Enregistrer
</button>
</div>

</form>

</div>

<?php include '../includes/footer.php'; ?>