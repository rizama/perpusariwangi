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
    $this->cell(297,6,'LAPORAN TRANSAKSI PERPUSTAKAAN DESA SARIWANGI',0,1,'C',10);
    $this->setFont('Times','',12);
    $this->cell(297,6,'Jl. Jawa No 6 Bandung - 0224233287',0,1,'C',1);
	}

	function Content($data)
	{
		foreach ($data as $key) {
    $date=date("F", strtotime($key['tanggal']));}
    $this->setFont('Times','',12);
    $this->setFillColor(255,255,255);
    $this->cell(3,10,'',0,0,'C',1);
    $this->cell(297,6,'Bulan : '.$date,0,1,'C',1);

		$this->Ln(8);
    $this->setFont('Times','',12);
    $this->setFillColor(180,180,180);
    $this->cell(3,6,'',0,0,'C',0);
    $this->cell(10,6,'No.',1,0,'C',1);
    $this->cell(50,6,'Kode Pengembalian',1,0,'C',1);
    $this->cell(50,6,'Kode Peminjaman',1,0,'C',1);
    $this->cell(50,6,'Nama',1,0,'C',1);
    $this->cell(40,6,'Batas Pengembalian',1,0,'C',1);
    $this->cell(40,6,'Tanggal Kembali',1,0,'C',1);
    $this->cell(40,6,'Denda',1,1,'C',1);

    $no = 1;
    $total=0;
    foreach ($data as $key) {
      $this->setFont('Times','',12);
      $this->setFillColor(255,255,255);
      $this->cell(3,10,'',0,0,'C',1);
      $this->cell(10,10,$no,1,0,'C',1);
      $this->cell(50,10,$key['kode_pengembalian'],1,0,'C',1);
      $this->cell(50,10,$key['kode_peminjaman'],1,0,'C',1);
      $this->cell(50,10,$key['nama'],1,0,'C',1);
      $this->cell(40,10,$key['tanggal_kembali'],1,0,'C',1);
      $this->cell(40,10,$key['tanggal'],1,0,'C',1);
      $this->cell(40,10,'Rp '. $key['denda'],1,1,'L',1);
      $no++;
			$total=$total+$key['denda'];
    }
		$this->cell(3,10,'',0,0,'C',1);

		$this->cell(240,10,'Total Denda : ',1,0,'C',1);
		$this->cell(40,10,'Rp '.$total,1,0,'L',1);


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
