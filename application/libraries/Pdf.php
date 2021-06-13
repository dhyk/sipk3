<?php 

class Pdf {

    public function __construct()
    {
       include_once APPPATH.'/third_party/TCPDF-6.3.5/tcpdf.php';
    }
 
    // function Pdf()
    // {
    //     $CI = & get_instance();
    //     log_message('Debug', 'mPDF class is loaded.');
    // }
 
    // function load($param=NULL)
    // {
    //     include_once APPPATH.'third_party\mpdf\mpdf\mpdf.php';
 
   
    //         $param = "'','', 0, '', 0, 0, 0, 0, 0, 0";

    //     return new mPDF($param);
    // }
}
?>