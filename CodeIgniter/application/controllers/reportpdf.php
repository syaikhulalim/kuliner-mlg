<?php
Class Reportpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'kuliner_malang',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'idKuliner',1,0);
        $pdf->Cell(45,6,'nama',1,0);
        $pdf->Cell(27,6,'tanggal',1,0);
        $pdf->Cell(85,6,'alamat',1,1);
        // $pdf->Cell(25,6,'FOTO FORMAT',1,1);
        $pdf->SetFont('Arial','',10);
        $kuliner_malang = $this->db->get('kuliner_malang')->result();
        foreach ($kuliner_malang as $row){
            $pdf->Cell(20,6,$row->idKuliner,1,0);
            $pdf->Cell(45,6,$row->nama,1,0);
            $pdf->Cell(27,6,$row->tanggal,1,0);
            $pdf->Cell(85,6,$row->alamat,1,1); 
            // $pdf->Cell(25,6,$row->foto,1,1); 
        }
        $pdf->Output();
    }
}
