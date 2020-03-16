<?php

require('table-wrap.php');

include '../connect.php';
$query = mysqli_query($conn, "SELECT reg.nama_lengkap, reg.ttl, reg.agama, reg.alamat_lengkap, reg.asal_sekolah, reg.kelas, reg.no_telp, reg.email,
prog.nama, h.nama, j.nama, reg.tanggal_daftar

FROM registration reg
JOIN program prog USING(id_program)
JOIN hari h USING(id_hari)
JOIN jam j USING(id_jam)

where reg.status_account='active'

ORDER BY reg.nama_lengkap ASC");
$data = array();

while ($row = mysqli_fetch_array($query)) {
	$data[] = $row;
}
 
$judul = "LAPORAN DATA SISWA AKTIF";
$header = array(
		array("label"=>"NAMA", "length"=>20, "align"=>"L"),
		array("label"=>"TTL", "length"=>20, "align"=>"L"),
		array("label"=>"AGAMA", "length"=>15, "align"=>"L"),
		array("label"=>"ALAMAT", "length"=>30, "align"=>"L"),
		array("label"=>"SEKOLAH", "length"=>30, "align"=>"L"),
		array("label"=>"KELAS", "length"=>15, "align"=>"L"),
		array("label"=>"TELP", "length"=>23, "align"=>"L"),
		array("label"=>"EMAIL", "length"=>30, "align"=>"L"),
		array("label"=>"PROGRAM", "length"=>20, "align"=>"L"),
		array("label"=>"HARI", "length"=>20, "align"=>"L"),
		array("label"=>"JAM", "length"=>20, "align"=>"L"),
		array("label"=>"TANGGAL DAFTAR", "length"=>32, "align"=>"L")
	);
 

$pdf = new PDF_MC_Table();
$pdf->AddPage('L');
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


$pdf->SetWidths(Array(20,20,15,30,30,15,23,30,20,20,20,32));

$pdf->SetLineHeight(5);

// var_dump($data);
foreach($data as $item){
	$pdf->Row(Array(
		$item['nama_lengkap'],
		$item['ttl'],
		$item['agama'],
		$item['alamat_lengkap'],
		$item['asal_sekolah'],
		$item['kelas'],
		$item['no_telp'],
		$item['email'],
		$item['8'],
		$item['9'],
		$item['10'],
		$item['tanggal_daftar'],
	));
}
 
#output file PDF
$pdf->Output();
?>