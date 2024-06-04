<?php
Class Laporanpdf extends CI_Controller{
    
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
        $pdf->Cell(190,7,'CV VENUS JAYA MOTOR',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DATA PELANGGAN',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,7,'Nomor Pelanggan',1,0,'C');
        $pdf->Cell(75,7,'Nama Pelanggan',1,0,'C');
        $pdf->Cell(40,7,'Telp',1,1,'C');
                      
        $pdf->SetFont('Arial','',10);
        $pelanggan = $this->db->get('nastro')->result();
        foreach ($pelanggan as $row){
            $pdf->Cell(40,7,$row->nomor_pelanggan,1,0,'C');
            $pdf->Cell(75,7,$row->nama_pelanggan,1,0);
            $pdf->Cell(40,7,$row->telp,1,1);
                     
        }
        $pdf->Output();
    }
}
