<?php
class V_cetak_peminjaman extends FPDF
{
	//Page header
	function Header()
	{
		$this->SetY(0);
    $this->setFont('Times','B',7);
    $this->setFillColor(255,255,255);
    $this->cell(39,6,'Bale Pustaka',0,1,'C',1);
    $this->setFont('Times','',7);
    $this->cell(39,0,'Jl. Jawa No 6 Bandung - 0224233287',0,1,'C',1);
		$this->Ln(2);
		$this->Line(7,$this->GetY(),50,$this->GetY());

    $this->Ln(6);
	}

	function Content($cetak)
	{

		foreach ($cetak as $key) {
			$this->setFont('Times','',7);
			$this->setFillColor(255,255,255);
			$this->cell(20,0,'Kode Peminjaman',0,0,'L',1);
			$this->cell(15,0,' : '.$key->kode_peminjaman,0,0,'L',1);
			$this->Ln(6);
			$this->cell(20,0,'Tanggal Pinjam',0,0,'L',1);
			$this->cell(15,0,' : '.$key->tanggal,0,0,'L',1);
			$this->Ln(6);
			$this->cell(20,0,'Batas Pengembalian',0,0,'L',1);
			$this->cell(15,0,' : '.$key->tanggal_kembali,0,0,'L',1);
			$this->Ln(6);
			$this->cell(20,0,'Kode Anggota',0,0,'L',1);
			$this->cell(15,0,' : '.$key->kode_anggota,0,0,'L',1);
		}

	}
	function Footer()
	{
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-7);
		//buat garis horizontal
		$this->Line(5,$this->GetY(),50,$this->GetY());
		//Arial italic 9
		$this->SetFont('Times','i',7);
		//nomor halaman
		$this->Cell(0,5,'Keterlambatan saat pengembalian',0,0,'C');
		$this->Ln(3);
		$this->Cell(0,5,' akan dikenakan denda',0,0,'C');
	}
}

$pdf = new V_cetak_peminjaman('P','mm',array(57,70));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($cetak);
$pdf->Output();
