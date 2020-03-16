<?php

require('table-wrap.php');

include '../connect.php';
$query = mysqli_query($conn, "SELECT nama, alamat, no_telp, pendidikan, bidang, status, sk FROM tutor");
$data = array();

while ($row = mysqli_fetch_array($query)) {
	$data[] = $row;
}
 
$judul = "LAPORAN DATA PENGAJAR";
$header = array(
		array("label"=>"NAMA", "length"=>30, "align"=>"L"),
		array("label"=>"ALAMAT", "length"=>40, "align"=>"L"),
		array("label"=>"NO TELP", "length"=>25, "align"=>"L"),
		array("label"=>"PENDIDIKAN", "length"=>30, "align"=>"L"),
		array("label"=>"BIDANG", "length"=>30, "align"=>"L"),
		array("label"=>"STATUS", "length"=>20, "align"=>"L"),
		array("label"=>"SK", "length"=>20, "align"=>"L")
	);
 

$pdf = new PDF_MC_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,15, $judul, '0', 1, 'C');

$pdf->SetFont('Arial','',10);
 
#buat header tabel
$pdf->SetFont('Arial','','9');
$pdf->SetFillColor(137,187,216);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(128,0,0);
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();


$pdf->SetWidths(Array(30,40,25,30,30,20,20));

$pdf->SetLineHeight(5);

foreach($data as $item){
	$pdf->Row(Array(
		$item['nama'],
		$item['alamat'],
		$item['no_telp'],
		$item['pendidikan'],
		$item['bidang'],
		$item['status'],
		$item['sk'],
	));
}
 
#output file PDF
$pdf->Output();
?>