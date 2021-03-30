<?php
/* include('../libraries/phpqrcode/qrlib.php');

 QRcode::png("liverpool", "image.png", "L",15,15);
 echo "<img src='image.png'/>";*/

function Terbilang($satuan){
  $huruf = array("","satu","dua","tiga","empat","lima","enam","tujuh",
    "delapan","sembilan","sepuluh","sebelas");
  if($satuan<12)
    return " ".$huruf[$satuan];
  elseif($satuan<20)
    return Terbilang($satuan-10)." belas";
  elseif($satuan<100)
    return Terbilang($satuan/10)." puluh".
  Terbilang($satuan%10);
  elseif($satuan<200)
    return "seratus".Terbilang($satuan-100);
  elseif($satuan<1000)
    return Terbilang($satuan/100)." ratus".
  Terbilang($satuan%100);
  elseif($satuan<2000)
    return "seribu".Terbilang($satuan-1000);
  elseif($satuan<1000000)
    return Terbilang($satuan/1000)." ribu".
  Terbilang($satuan%1000);
  elseif($satuan<1000000000)
    return Terbilang($satuan/1000000)." juta".
  Terbilang($satuan%1000000);
  elseif($satuan< 1000000000000)
    return Terbilang($satuan/1000000000) . " milyar" . Terbilang(fmod($satuan,1000000000));
  else if ($satuan < 1000000000000000)
    return Terbilang($satuan/1000000000000) . " trilyun" . Terbilang(fmod($satuan,1000000000000));    
  elseif($satuan>=10000000000000000)
    echo"hasil terbilang tidak dapat di proses, nilai terlalu besar";
}

foreach ($kntrk as $result);
$array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");



/*$nomorPH = 'PH-003/SISUB/III/01/2017';*/
$nomorPH              = $result->ph_no;
$rev                  = $result->ph_status;

$kode                 = $result->kode;
$inisial              = $result->inisial;
$tanggalPH            = $result->ph_tanggal;
$phbulan              = $result->ph_tanggal1;
$bln                  = substr($phbulan,6, 1);
$bulan                = $array_bln[$bln];
$tahun                = substr($tanggalPH, 0,4);
$klien                = $result->klien_nama;
$telepon              = $result->klien_tlp.'/ '.$result->klien_fax;
$referensi            = $result->ph_refrensi;
$pejabat              = $result->ph_pejabat;
$jenispekerjaan       = $result->ph_jenis;
$alamat               = $result->klien_alamat;
$barangObyek          = $result->ph_barang;
$lokasi               = $result->ph_lokasi;
/*$ph_pic               = $result->ph_pic;
$ph_pic1              = $result->ph_pic1;*/
$nilai               = $result->ph_harga;
$penawaranharga = $result->ph_uang.' '.number_format($result->ph_harga);
$terbilang = '( '.Terbilang($nilai).' rupiah )';
$ketentuanPenawaran = $result->ph_ketentuan;
$lingkupKerja = $result->ph_lingkup /*'Materi training meliputi:
1. Pengenalan & Penerapan ISO 14001 Klausul 4.1 s/d 4.3.1
(mencakup Identifikasi, Evaluasi Aspek dan Dampak Lingkungan)
2. Workshop pengisian formulir evaluasi aspek dan dampak lingkungan, formulir seleksi prioritas
3. Pengendalian pencemaran'*/;
$jangkaWaktu = $result->ph_waktu /*'1 Batch 2 hari
1 Batch terdiri max 4 unit @ 6 org (24 org)'*/;
$terminPembayaran = $result->ph_termin;
$rekeningBank = 'PT. Surveyor Indonesia
Rupiah  AC 0394.01.000079303
BRI Cabang Kapas Krampung
S U R A B A Y A
';
/*$pic = 'ekd  /  dpr /  sny';*/
$pic = $result->ph_pic.'  '.$result->ph_pic1;


$klien1 = '';
$klien2 = '';
if (strlen($klien)>49)
{
	$klien1 = substr($klien,0,49);
	$klien2 = substr($klien,49,49);
}
else $klien1 = $klien;

$referensi1 = '';
$referensi2 = '';
if (strlen($referensi)>49)
{
	$referensi1 = substr($referensi,0,49);
	$referensi2 = substr($referensi,49,49);
}
else $referensi1 = $referensi;

$pejabat1 = '';
$pejabat2 = '';
if (strlen($pejabat)>49)
{
	$pejabat1 = substr($pejabat,0,49);
	$pejabat2 = substr($pejabat,49,49);
}
else $pejabat1 = $pejabat;

$jenispekerjaan1 = '';
$jenispekerjaan2 = '';
if (strlen($jenispekerjaan)>49)
{
	$jenispekerjaan1 = substr($jenispekerjaan,0,49);
	$jenispekerjaan2 = substr($jenispekerjaan,49,49);
}
else $jenispekerjaan1 = $jenispekerjaan;

$alamat1 = '';
$alamat2 = '';
if (strlen($alamat)>49)
{
	$alamat1 = substr($alamat,0,49);
	$alamat2 = substr($alamat,49,49);
}
else $alamat1 = $alamat;

$barangObyek1 = '';
$barangObyek2 = '';
if (strlen($barangObyek)>49)
{
	$barangObyek1 = substr($barangObyek,0,49);
	$barangObyek2 = substr($barangObyek,49,49);
}
else $barangObyek1 = $barangObyek;

$telepon1 = '';
$telepon2 = '';
if (strlen($telepon)>49)
{
	$telepon1 = substr($telepon,0,49);
	$telepon2 = substr($telepon,49,49);
}
else $telepon1 = $telepon;

$lokasi1 = '';
$lokasi2 = '';
if (strlen($telepon)>49)
{
	$lokasi1 = substr($lokasi,0,49);
	$lokasi2 = substr($lokasi,49,49);
}
else $lokasi1 = $lokasi;


/*require('fpdf.php');*/

class PDF extends FPDF
{
  function SetDash($black=false, $white=false)
  {
    if($black and $white)
      $s=sprintf('[%.3f %.3f] 0 d', $black*$this->k, $white*$this->k);
    else
      $s='[] 0 d';
    $this->_out($s);
  }
}

$top = 30;
$left = 15;

$pdf = new FPDF('P','mm','A4');
$pdf = new PDF();
/*$pdf->Open();*/
$pdf->AddPage();
/*$pdf->Output('PH.pdf','');*/
$pdf->SetFont('Arial','BU',14);
$pdf->SetXY($left+25,$top+5);
$pdf->Cell(0,0,'PENAWARAN HARGA');
$pdf->SetFont('Arial','BI',14);
$pdf->SetXY($left+35,$top+11);
$pdf->Cell(0,0,'QUOTATION');

$pdf->SetXY($left+110,$top);
$pdf->SetFont('Arial','',7);
$pdf->Cell(0,0,'No');
$pdf->SetXY($left+125,$top);
$pdf->SetFont('Arial','',7);
$pdf->Cell(0,0,' : '.'PH-'.$nomorPH.'/'.'SISUB'.'/'.$bulan.'/'.$kode.'/'.$tahun.$rev);
/*$nomorPH = 'PH-003/SISUB/III/01/2017';*/

$pdf->SetXY($left+110,$top+4);
$pdf->SetFont('Arial','U',7);
$pdf->Cell(0,0,'Tanggal');
$pdf->SetXY($left+125,$top+4);
$pdf->SetFont('Arial','',7);
$pdf->Cell(0,0,' : '.date('d F Y', strtotime($tanggalPH)));

$pdf->SetXY($left+110,$top+8);
$pdf->SetFont('Arial','I',7);
$pdf->Cell(0,0,'Date');


  // horizontal kiri kanan
$pdf->line($left+110,$top-2,$left+190,$top-2);
$pdf->line($left+110,$top+2,$left+190,$top+2);
$pdf->line($left+110,$top+10,$left+190,$top+10);
  // veritikal atas bawah
$pdf->line($left+110,$top-2,$left+110,$top+10);
$pdf->line($left+190,$top-2,$left+190,$top+10);


$pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$top+17,$left+190,$top+17);

  $pdf->SetXY($left+1,$top+19);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Klien');

  $pdf->SetXY($left+1,$top+23);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Client');

  $pdf->SetXY($left+25,$top+19);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$klien1);

  $pdf->SetXY($left+25,$top+23);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$klien2);

  $pdf->SetXY($left+95,$top+19);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Referensi');

  $pdf->SetXY($left+95,$top+23);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Reference');

  $pdf->SetXY($left+119,$top+19);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$referensi1);

  $pdf->SetXY($left+119,$top+23);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$referensi2);  

  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$top+25,$left+190,$top+25);

  $pdf->SetXY($left+1,$top+27);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Pejabat');

  $pdf->SetXY($left+1,$top+31);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Person');

  $pdf->SetXY($left+25,$top+27);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$pejabat1);

  $pdf->SetXY($left+25,$top+31);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$pejabat2);

  $pdf->SetXY($left+95,$top+27);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Jenis Pekerjaan');

  $pdf->SetXY($left+95,$top+31);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Type of works');

  $pdf->SetXY($left+119,$top+27);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$jenispekerjaan1);

  $pdf->SetXY($left+119,$top+31);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$jenispekerjaan2);  

  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$top+33,$left+190,$top+33);

  $pdf->SetXY($left+1,$top+35);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Alamat');

  $pdf->SetXY($left+1,$top+39);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Address');

  $pdf->SetXY($left+25,$top+35);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$alamat1);

  $pdf->SetXY($left+25,$top+39);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$alamat2);

  $pdf->SetXY($left+95,$top+35);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Barang/Obyek');

  $pdf->SetXY($left+95,$top+39);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Goods/Object');

  $pdf->SetXY($left+119,$top+35);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$barangObyek1);

  $pdf->SetXY($left+119,$top+39);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$barangObyek2);  

  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$top+41,$left+190,$top+41);

  $pdf->SetXY($left+1,$top+43);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Telepon/Faks');

  $pdf->SetXY($left+1,$top+47);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Phone/Facs');

  $pdf->SetXY($left+25,$top+43);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$telepon1);

  $pdf->SetXY($left+25,$top+47);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$telepon2);

  $pdf->SetXY($left+95,$top+43);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Lokasi');

  $pdf->SetXY($left+95,$top+47);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Location');

  $pdf->SetXY($left+119,$top+43);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$lokasi1);

  $pdf->SetXY($left+119,$top+47);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,' : '.$lokasi2);

  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$top+49,$left+190,$top+49);

  $pdf->SetLineWidth(0.3);
  $pdf->SetDash('');
  $pdf->line($left,$top+51,$left+190,$top+51);

  $pdf->SetXY($left+1,$top+55);
  $pdf->SetFont('Arial','U',9);
  $pdf->Cell(0,0,'Penawaran Harga');

  $pdf->SetXY($left+1,$top+59);
  $pdf->SetFont('Arial','I',9);
  $pdf->Cell(0,0,'Quotation');

  $pdf->SetXY($left+30,$top+55);
  $pdf->SetFont('Arial','B',9);
  $pdf->Cell(0,0,' : '.$penawaranharga);

  $pdf->SetXY($left+30,$top+59);
  $pdf->SetFont('Arial','B',9);
  $pdf->Cell(0,0,'   '.$terbilang);

  $pdf->SetLineWidth(0.3);
  $pdf->SetDash('');
  $pdf->line($left,$top+61,$left+190,$top+61);

  $pdf->line($left,$top+51,$left,$top+61);
  $pdf->line($left+190,$top+51,$left+190,$top+61);

  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$top+63,$left+190,$top+63);

  $pdf->SetXY($left+80,$top+66);
  $pdf->SetFont('Arial','UB',7);
  $pdf->Cell(0,0,'Uraian dan Ketentuan');

  $pdf->SetXY($left+80,$top+70);
  $pdf->SetFont('Arial','BI',7);
  $pdf->Cell(0,0,'Term and Conditions');

  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$top+72,$left+190,$top+72);

  $pdf->SetXY($left+1,$top+74);
  $pdf->SetFont('Arial','B',7);
  $pdf->Cell(0,0,'Company adalah/is PT Surveyor Indonesia (Persero) dan/and Client adalah/is '.$klien1);

  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$top+77,$left+190,$top+77);

  $pdf->SetXY($left+1,$top+79);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Ketentuan Penawaran');

  $pdf->SetXY($left+1,$top+82);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Quotation Condition');

  $pdf->SetXY($left+45,$top+79);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,':');

  $pointertop = $top+79; 

  $posisi = 0;
  for ($ulang = 1; $ulang <=strlen($ketentuanPenawaran); $ulang++)
  {
    if (substr($ketentuanPenawaran,$ulang,1) == chr(13))
    {

      $pdf->SetXY($left+47,$pointertop);
      $pdf->SetFont('Arial','',7);
      $pdf->Cell(0,0,substr($ketentuanPenawaran,$posisi,$ulang-$posisi));
      $posisi = $ulang+1;
      $pointertop = $pointertop+3;
    }  
  }

  $pdf->SetXY($left+47,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,substr($ketentuanPenawaran,$posisi,$ulang));
  $pointertop = $pointertop+3;


  if ($posisi == 0)
  {
  	$pointertop = $pointertop+3;
  }
  // garis putus - putus
  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$pointertop,$left+190,$pointertop);
  $pointertop = $pointertop + 2;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Lingkup Kerja');

  $pdf->SetXY($left+1,$pointertop+3);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Scope of Work');

  $pdf->SetXY($left+45,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,':');


  $posisi = 0;
  for ($ulang = 1; $ulang <=strlen($lingkupKerja); $ulang++)
  {
    if (substr($lingkupKerja,$ulang,1) == chr(13))
    {

      $pdf->SetXY($left+47,$pointertop);
      $pdf->SetFont('Arial','',7);
      $pdf->Cell(0,0,substr($lingkupKerja,$posisi,$ulang-$posisi));
      $posisi = $ulang+1;
      $pointertop = $pointertop+3;
    } 
  } 

  $pdf->SetXY($left+47,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,substr($lingkupKerja,$posisi,$ulang));
  $pointertop = $pointertop+3;


  if ($posisi == 0)
  {
  	$pointertop = $pointertop+3;
  }


  // garis putus - putus 
  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$pointertop,$left+190,$pointertop);
  $pointertop = $pointertop + 2;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Jangka Waktu Pelaksanaan');

  $pdf->SetXY($left+1,$pointertop+3);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Time Period');

  $pdf->SetXY($left+45,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,':');


  $posisi = 0;
  for ($ulang = 1; $ulang <=strlen($jangkaWaktu); $ulang++)
  {
    if (substr($jangkaWaktu,$ulang,1) == chr(13))
    {

      $pdf->SetXY($left+47,$pointertop);
      $pdf->SetFont('Arial','',7);
      $pdf->Cell(0,0,substr($jangkaWaktu,$posisi,$ulang-$posisi));
      $posisi = $ulang+1;
      $pointertop = $pointertop+3;
    }
  } 

  $pdf->SetXY($left+47,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,substr($jangkaWaktu,$posisi,$ulang));
  $pointertop = $pointertop+3;


  if ($posisi == 0)
  {
  	$pointertop = $pointertop+3;
  }


  // garis putus - putus
  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$pointertop,$left+190,$pointertop);
  $pointertop = $pointertop + 2;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Termin Pembayaran');

  $pdf->SetXY($left+1,$pointertop+3);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Termin of Payment');

  $pdf->SetXY($left+45,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,':');



  $posisi = 0;
  for ($ulang = 1; $ulang <=strlen($terminPembayaran); $ulang++)
  {
    if (substr($terminPembayaran,$ulang,1) == chr(13))
    {

      $pdf->SetXY($left+47,$pointertop);
      $pdf->SetFont('Arial','',7);
      $pdf->Cell(0,0,substr($terminPembayaran,$posisi,$ulang-$posisi));
      $posisi = $ulang+1;
      $pointertop = $pointertop+3;
    }  
  }
  
  $pdf->SetXY($left+47,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,substr($terminPembayaran,$posisi,$ulang));
  $pointertop = $pointertop+3;
  if ($posisi == 0)
  {
  	$pointertop = $pointertop+3;
  }



  // garis putus - putus
  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$pointertop,$left+190,$pointertop);
  $pointertop = $pointertop + 2;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Validitas Penawaran');

  $pdf->SetXY($left+1,$pointertop+3);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Quotation Validity');

  $pdf->SetXY($left+45,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,':');

  $pdf->SetXY($left+47,$pointertop);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'1 (satu) bulan sejak diterbitkannya surat penawaran harga ini');  

  $pdf->SetXY($left+47,$pointertop+3);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'1 (one) month since this quotation letter issued');

  $pointertop = $pointertop + 6;

  // garis putus - putus
  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$pointertop,$left+190,$pointertop);
  $pointertop = $pointertop + 2;



  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Rekening Bank');

  $pdf->SetXY($left+1,$pointertop+3);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'Bank Account');

  $pdf->SetXY($left+45,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,':');



  $posisi = 0;
  for ($ulang = 1; $ulang <=strlen($rekeningBank); $ulang++)
  {
    if (substr($rekeningBank,$ulang,1) == chr(13))
    {

      $pdf->SetXY($left+47,$pointertop);
      $pdf->SetFont('Arial','',7);
      $pdf->Cell(0,0,substr($rekeningBank,$posisi,$ulang-$posisi));
      $posisi = $ulang+1;
      $pointertop = $pointertop+3;
    }  
  }
  
  $pdf->SetXY($left+47,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,substr($rekeningBank,$posisi,$ulang));
  $pointertop = $pointertop+3;
  if ($posisi == 0)
  {
  	$pointertop = $pointertop+3;
  }


  // garis putus - putus
  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(0.5,0.5); //0.5mm on, 0.5mm off	
  $pdf->line($left,$pointertop,$left+190,$pointertop);
  $pointertop = $pointertop + 2;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Jika setuju dengan penawaran harga diatas, mohon menandatangani kolom persetujuan dan harap dikirim kembali');
  $pointertop = $pointertop + 3;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'If you agree with the above quotation, please sign the agreement column below and please sent back');
  $pointertop = $pointertop + 6;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Dokumen ini sah sebagai Konfirmasi Order, apabila telah ditandatangani kedua belah pihak (scan atau faks berlaku)');
  $pointertop = $pointertop + 3;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'This document is valid as the Order Confirmation, if it has been signed by both parties (scan or facsimilie valid)');
  $pointertop = $pointertop + 6;

  $pdf->SetLineWidth(0.3);
  $pdf->SetDash('');
  $pdf->line($left+105,$pointertop,$left+190,$pointertop);

  $pdf->SetLineWidth(0.3);
  $pdf->SetDash('');
  $pdf->line($left+105,$pointertop,$left+105,$pointertop+37);

  $pdf->SetLineWidth(0.3);
  $pdf->SetDash('');
  $pdf->line($left+105,$pointertop+37,$left+190,$pointertop+37);

  $pdf->SetLineWidth(0.3);
  $pdf->SetDash('');
  $pdf->line($left+190,$pointertop,$left+190,$pointertop+37);


  $pointertop = $pointertop + 6;
  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','B',9);
  $pdf->Cell(0,0,'PT. SURVEYOR INDONESIA');  

  $pdf->SetXY($left+105,$pointertop);
  $pdf->SetFont('Arial','U',7);
  $pdf->Cell(0,0,'Saya setuju dengan penawaran harga diatas');
  $pointertop = $pointertop + 3;

  $pdf->SetXY($left+105,$pointertop);
  $pdf->SetFont('Arial','I',7);
  $pdf->Cell(0,0,'I Agree with the above quotation');
  $pointertop = $pointertop + 3;

  $pdf->SetXY($left+105,$pointertop);
  $pdf->SetFont('Arial','B',7);
  $pdf->Cell(0,0,$klien1);
  $pointertop = $pointertop + 15;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','U',9);
  $pdf->Cell(0,0,'NEGARI KARUNIA ADI');
  $pointertop = $pointertop + 4;

  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','',9);
  $pdf->Cell(0,0,'GENERAL MANAGER');
  $pointertop = $pointertop + 1;

  $pdf->SetXY($left+105,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,'______________________________(name)');
  $pointertop = $pointertop + 3;

  $pdf->SetXY($left+105,$pointertop);
  $pdf->SetFont('Arial','',7);
  /*$pdf->Cell(0,0,'                                                            (position)');*/
  $pdf->Cell(0,0,'(position)');
  $pointertop = $pointertop + 6;
  


  $pdf->SetXY($left+1,$pointertop);
  $pdf->SetFont('Arial','',7);
  $pdf->Cell(0,0,$pic);	


  $pdf->Output();


  ?>
