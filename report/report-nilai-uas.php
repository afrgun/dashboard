<?php

require('table-wrap.php');

include '../connect.php';
$query = mysqli_query($conn, "SELECT pen.tanggal, reg.nama_lengkap, map.nama, pen.materi, pen.keterangan, pen.nilai, prog.nama

FROM uas pen
JOIN mapel map USING(id_mapel)
join siswa sis using(id_siswa)
join tutor tu using(id_tutor)
join registration reg using(id_regis)
join program prog using(id_program)

order by pen.tanggal ASC");
$data = array();

while ($row = mysqli_fetch_array($query)) {
	$data[] = $row;
}
 
$judul = "LAPORAN DATA PENILAIAN UAS";
$header = array(
		array("label"=>"TANGGAL", "length"=>20, "align"=>"L"),
		array("label"=>"NAMA", "length"=>30, "align"=>"L"),
		array("label"=>"MATA PELAJARAN", "length"=>30, "align"=>"L"),
		array("label"=>"MATERI", "length"=>35, "align"=>"L"),
		array("label"=>"KETERANGAN", "length"=>40, "align"=>"L"),
		array("label"=>"NILAI", "length"=>15, "align"=>"L"),
		array("label"=>"PROGRAM", "length"=>23, "align"=>"L")
	);
 

$pdf = new PDF_MC_Table();
$pdf->AddPage('');
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


$pdf->SetWidths(Array(20,30,30,35,40,15,23));

$pdf->SetLineHeight(5);

// var_dump($data);
foreach($data as $item){
	$pdf->Row(Array(
		$item['tanggal'],
		$item['nama_lengkap'],
		$item['2'],
		$item['materi'],
		$item['keterangan'],
		$item['nilai'],
		$item['nama']
	));
}
 
#output file PDF
$pdf->Output();
?>