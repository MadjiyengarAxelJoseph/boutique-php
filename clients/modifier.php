<?php

include '../includes/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM clients WHERE id = $id";
$resultat = mysqli_query($conn, $sql);
$client = mysqli_fetch_assoc($resultat);

if(isset($_POST['modifier']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $ville = $_POST['ville'];
    $quartier = $_POST['quartier'];

    $sql = "UPDATE clients SET
            nom='$nom',
            prenom='$prenom',
            telephone='$telephone',
            ville='$ville',
            quartier='$quartier'
            WHERE id=$id";

    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}

include '../includes/header.php';
?>

<h2>Modifier client</h2>

<form method="POST">

    <input type="text" name="nom" value="<?= $client['nom']; ?>" required>
    <br><br>

    <input type="text" name="prenom" value="<?= $client['prenom']; ?>" required>
    <br><br>

    <input type="text" name="telephone" value="<?= $client['telephone']; ?>" required>
    <br><br>

    <input type="text" name="ville" value="<?= $client['ville']; ?>" required>
    <br><br>

    <input type="text" name="quartier" value="<?= $client['quartier']; ?>" required>
    <br><br>

    <button type="submit" name="modifier" class="btn">
        Modifier
    </button>

</form>

<?php include '../includes/footer.php'; ?>