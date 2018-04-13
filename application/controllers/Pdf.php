<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '\tcpdf\tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
    }

    public function generate_pdf()
    {
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle('My Title');
        $pdf->SetHeaderMargin(30);
        $pdf->SetTopMargin(20);
        $pdf->setFooterMargin(20);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');

        $pdf->AddPage();

        $pdf->Write(5, 'Some sample text');
        $pdf->Output('My-File-Name.pdf', 'I');
    }
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */