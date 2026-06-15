<?php

require('../fpdf186/fpdf.php');
include '../includes/db.php';

$id = $_GET['id'];

$sql = "

SELECT
commandes.id,
commandes.montant_total,

clients.nom,
clients.prenom

FROM commandes

INNER JOIN clients
ON commandes.client_id=clients.id

WHERE commandes.id=$id

";

$resultat =
mysqli_query($conn,$sql);

$data =
mysqli_fetch_assoc($resultat);

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont(
'Arial',
'B',
18
);

$pdf->Cell(
0,
10,
'FACTURE',
0,
1,
'C'
);

$pdf->Ln(10);

$pdf->SetFont(
'Arial',
'',
12
);

$pdf->Cell(
0,
10,
'Client : '
.$data['nom']
.' '
.$data['prenom'],
0,
1
);

$pdf->Cell(
0,
10,
'Commande N° '
.$data['id'],
0,
1
);

$pdf->Cell(
0,
10,
'Total : '
.$data['montant_total']
.' FCFA',
0,
1
);

$pdf->Output();


$pdf->SetFillColor(37,99,235);

$pdf->Cell(
190,
12,
utf8_decode('FACTURE'),
1,
1,
'C',
true
);

$pdf->Ln(10);

$pdf->Cell(
190,
10,
utf8_decode('Boutique AXEL'),
0,
1
);

$pdf->Cell(
190,
10,
utf8_decode('Client : '.$data['nom'].' '.$data['prenom']),
0,
1
);

$pdf->Cell(
190,
10,
utf8_decode('Commande N° '.$data['id']),
0,
1
);

$pdf->Cell(
190,
10,
utf8_decode('Total : '.$data['montant_total'].' FCFA'),
0,
1
);