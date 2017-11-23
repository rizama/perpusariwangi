<?php
class PDF extends FPDF
{
	//Page header
	function Header()
	{
    $this->setFont('Times','',10);
    $this->setFillColor(255,255,255);
    $this->cell(285,6,"Printed date : " . date('d/m/Y'),0,1,'R',1);

    $this->Ln(12);
    $this->setFont('Times','B',14);
    $this->setFillColor(255,255,255);
    $this->cell(297,6,'LAPORAN ANGGOTA BARU PERPUSTAKAAN DESA SARIWANGI',0,1,'C',10);
    $this->setFont('Times','',12);
    $this->cell(297,6,'Jl. Jawa No 6 Bandung - 0224233287',0,1,'C',1);

	}

	function Content($data)
	{
    foreach ($data as $key) {
    $date=date("F", strtotime($key['tanggal_daftar']));}
    $this->setFont('Times','',12);
    $this->setFillColor(255,255,255);
    $this->cell(3,10,'',0,0,'C',1);
    $this->cell(297,6,'Bulan : '.$date,0,1,'C',1);

    $this->Ln(8);
    $this->setFont('Times','',12);
    $this->setFillColor(180,180,180);
    $this->cell(3,6,'',0,0,'C',0);
		$this->cell(10,6,'No.',1,0,'C',1);
    $this->cell(15,6,'Kode Anggota',1,0,'C',1);
    $this->cell(50,6,'Nama',1,0,'C',1);
    $this->cell(25,6,'Tanggal Lahir',1,0,'C',1);
    $this->cell(10,6,'JK',1,0,'C',1);
    $this->cell(100,6,'Alamat',1,0,'C',1);
    $this->cell(30,6,'Tanggal Daftar',1,0,'C',1);
    $this->cell(35,6,'Telepon',1,1,'C',1);

    $no = 1;
      foreach ($data as $key) {
      $this->setFont('Times','',12);
      $this->setFillColor(255,255,255);
      $this->cell(3,10,'',0,0,'C',1);
			$this->cell(10,10,$no,1,0,'C',1);
      $this->cell(15,10,$key['kode_anggota'],1,0,'C',1);
      $this->cell(50,10,$key['nama'],1,0,'C',1);
      $this->cell(25,10,$key['tanggal_lahir'],1,0,'C',1);
      $this->cell(10,10,$key['jenis_kelamin'],1,0,'C',1);
      $this->cell(100,10,$key['alamat'],1,0,'C',1);
      $this->cell(30,10,$key['tanggal_daftar'],1,0,'C',1);
      $this->cell(35,10,$key['telepon'],1,1,'C',1);
      $no++;
    }

	}
	function Footer()
	{
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		$this->Line(10,$this->GetY(),290,$this->GetY());
		//Arial italic 9
		$this->SetFont('Times','',10);
		//nomor halaman
		$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
	}
}

$pdf = new PDF('L','mm',array(210,297));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($data);
$pdf->Output();
