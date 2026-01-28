<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;

class Dompdf_gen
{
    public function __construct()
    {
        require_once APPPATH.'third_party/dompdf/autoload.inc.php';
    }

    public function generate($html, $filename='', $paper='A4', $orientation='portrait')
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream($filename, ['Attachment' => 1]);
    }
}
