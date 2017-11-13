<?php
class PDF extends FPDF
{
	//Page header
	function Header()
	{
    $this->setFont('Times','',10);
    $this->setFillColor(255,255,255);
    $this->cell(195,6,"Printed date : " . date('d/m/Y'),0,1,'R',1);

    $this->Ln(12);
    $this->setFont('Times','B',14);
    $this->setFillColor(255,255,255);
    $this->cell(200,6,'LAPORAN DVD BARU BALE PUSTAKA',0,1,'C',10);
    $this->setFont('Times','',12);
    $this->cell(200,6,'Jl. Jawa No 6 Bandung - 0224233287',0,1,'C',1);

	}

	function Content($data)
	{
    foreach ($data as $key) {
    $date=date("F", strtotime($key['tanggal']));}
    $this->setFont('Times','',12);
    $this->setFillColor(255,255,255);
    $this->cell(3,10,'',0,0,'C',1);
    $this->cell(200,6,'Bulan : '.$date,0,1,'C',1);

    $this->Ln(8);
    $this->setFont('Times','',12);
    $this->setFillColor(180,180,180);
    $this->cell(3,6,'',0,0,'C',0);
    $this->cell(10,6,'No.',1,0,'C',1);
    $this->cell(30,6,'Kode DVD',1,0,'C',1);
    $this->cell(100,6,'Judul DVD',1,0,'C',1);
    $this->cell(50,6,'Tahun',1,1,'C',1);

    $no = 1;
                foreach ($data as $key) {
                $this->setFont('Times','',12);
                $this->setFillColor(255,255,255);
                $this->cell(3,10,'',0,0,'C',1);
                $this->cell(10,10,$no,1,0,'C',1);
                $this->cell(30,10,$key['kode_dvd'],1,0,'C',1);
                $this->cell(100,10,$key['judul_dvd'],1,0,'C',1);
                $this->cell(50,10,$key['tahun'],1,1,'C',1);
                $no++;
        }

	}
	function Footer()
	{
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		$this->Line(10,$this->GetY(),205,$this->GetY());
		//Arial italic 9
		$this->SetFont('Times','',10);
		//nomor halaman
		$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
	}
}

$pdf = new PDF('P','mm',array(210,297));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($data);
$pdf->Output();
