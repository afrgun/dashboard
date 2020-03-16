<?php
session_start();
include '../connect.php';
require('table-wrap.php');

$data = array();
$dataProfile   = array();
$id = $_SESSION['id_regis'];

$query = mysqli_query($conn, "SELECT tut.nama, map.nama, uts.materi, uts.nilai, uts.keterangan

FROM uts uts
join siswa sis using(id_siswa)
join tutor tut using(id_tutor)
join mapel map using(id_mapel)
join registration reg using(id_regis)

WHERE reg.id_regis=$id

ORDER BY tanggal ASC ");

while ($row = mysqli_fetch_array($query)) {
	$data[] = $row;
}

$getDataProfile = mysqli_query($conn, "SELECT reg.nama_lengkap, reg.alamat_lengkap, reg.no_telp, reg.kelas, prog.nama, 
h.nama, j.nama , reg.asal_sekolah, reg.prestasi, reg.email

FROM registration reg
join program prog using(id_program)
join hari h using(id_hari)
join jam j using(id_jam)

where id_regis=$id");
 
while ($row = mysqli_fetch_array($getDataProfile)) {
	$dataProfile[] = $row;
}

$judul = "LAPORAN REKAPITULASI KBM SISWA TENGAH SEMESTER";

$headerProfile = array(
  array("label"=>"Nama", "length"=>30, "align"=>"L"),
  array("label"=>"Alamat", "length"=>38, "align"=>"L"),
  array("label"=>"Telp", "length"=>25, "align"=>"L"),
  array("label"=>"Kelas", "length"=>25, "align"=>"L"),
  array("label"=>"Program", "length"=>20, "align"=>"L"),
  array("label"=>"Hari", "length"=>25, "align"=>"L"),
  array("label"=>"Jam", "length"=>25, "align"=>"L")
);

$header = array(
  array("label"=>"TUTOR", "length"=>30, "align"=>"L"),
  array("label"=>"MATA PELAJARAN", "length"=>38, "align"=>"L"),
  array("label"=>"MATERI", "length"=>30, "align"=>"L"),
  array("label"=>"KEHADIRAN", "length"=>35, "align"=>"L"),
  array("label"=>"NILAI", "length"=>15, "align"=>"L"),
  array("label"=>"KETERANGAN", "length"=>40, "align"=>"L")
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
foreach ($headerProfile as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
$pdf->SetWidths(Array(30,38,25,25,20,25,25));
$pdf->SetLineHeight(5);

// var_dump($data);
foreach($dataProfile as $item){
	$pdf->Row(Array(
		$item['nama_lengkap'],
		$item['alamat_lengkap'],
		$item['no_telp'],
		$item['kelas'],
		$item['4'],
    $item['5'],
    $item['6']
	));
}
$pdf->Ln();
$pdf->Ln();

foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();


$pdf->SetWidths(Array(30,38,30,35,15,40));
$pdf->SetLineHeight(5);

// var_dump($data);
foreach($data as $item){
	$pdf->Row(Array(
		$item['0'],
		$item['1'],
		$item['materi'],
		($item['materi']!=NULL ? "Hadir" : "Tidak Hadir"),
		$item['nilai'],
		$item['keterangan']
	));
}
 
#output file PDF
$pdf->Output();
?>