<?php

include '../includes/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM produits WHERE id=$id";

mysqli_query($conn,$sql);

header("Location:index.php");
exit();