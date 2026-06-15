<?php

include '../includes/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM clients WHERE id = $id";

mysqli_query($conn, $sql);

header("Location: index.php");
exit();