<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <br>

            <div class="content">
                <div class="container">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Assesment P2 Covid-19 di Tempat Kerja</b></h4>
                                <?php echo form_open_multipart('index.php/P2covid/simpan_covid');?>
                                <table class="tablesaw m-t-20 table m-b-0" data-tablesaw-mode="stack">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3" class="col-md-1">No</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist" class="col-md-5">Indikator Penilaian</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="col-md-4">Pertanyaan</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1" class="col-md-1">Jawab</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4" class="col-md-1">Data Dukung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">1
                                            </td>
                                            <td rowspan="2">Kebijakan program P2
                                                Covid-19 di Tempat Kerja
                                            </td>
                                            <td>Kebijakan khusus program P2 Covid-19
                                                dicantumkan kedalam PP/ PKB </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p1" id="a1" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p1" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Memiliki kebijakan khusus program P2
                                                Covid-19 dan ditandatangani direktur
                                                (belum dimasukan kedalam PP/ PKB) </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p1" id="b1" value="600" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-------2-------->
                                        <tr>
                                            <td rowspan="2">2
                                            </td>
                                            <td rowspan="2">Melakukan sosialisasi
                                                kebijakan program P2 Covid-19 di tempat kerja.
                                            </td>
                                            <td>Kepada seluruh pekerja </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p2" id="a2" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p2" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Belum kepada seluruh pekerja </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p2" id="b2" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-------3-------->
                                        <tr>
                                            <td rowspan="3">3
                                            </td>
                                            <td rowspan="3">Melaksanakan program P2
                                                Covid-19 di tempat kerja : <br> <br>
                                                a. Pelaksanaan Standard Operating
                                                Procedure (SOP) Promotif dan preventif
                                                (seperti; Melakukan sosialisasi dan edukasi
                                                Covid-19, Memasang poster/banner/ spanduk terkait Covid19 di area-area umum,
                                                Memfasilitasi sarana cuci tangan dan hand sanitizer, Menyediakan
                                                APD, Memasukan materi covid-19 dalam safety induction, d11)
                                                <br> <br>
                                                b. Pelaksanaan SOP
                                                Kuratif (seperti; Menyediakan ruangan isolasi sementara, Memfasilitasi proses
                                                rujukan dan perawatan selanjutnya, Membangun koordinasi dengan
                                                puskesmas dan dinas kesehatan setempat)
                                                <br> <br>
                                                c. Pelaksanaan SOP
                                                rehabilitatif (seperti; Memiliki perencanaan dan evaluasi untuk
                                                mengembalikan pekerja ke tempat kerja) .
                                            </td>
                                            <td>Melaksanakan program P2 Covid-19 di tempat kerja, poin 3.a, 3.b dan
                                                3.c </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p3" id="a3" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p3" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Melaksanakan program P2 Covid-19 di tempat kerja, poin 3.a dan 3.b
                                                atau poin 3.a dan 3.c.</td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p3" id="b3" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Melaksanakan program P2 Covid-19 di tempat kerja, salah satu poin
                                                3.a, 3.b atau 3.c. </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p3" id="c34" value="30" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-------4-------->
                                        <tr>
                                            <td rowspan="2">4
                                            </td>
                                            <td rowspan="2">Perencanaan keberlangsungan Usaha: <br>
                                                a. Menyusun perencanaan keberlangsungan usaha <br>
                                                b. Melaksanakan perencanaan keberlangsungan usaha
                                            </td>
                                            <td>Melaksanakan poin 4.a dan 4.b </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p4" id="radio4" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p4" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                       
                                            <td>Melaksanakan poin 4.a saja </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p4" id="radio4" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-------5-------->
                                        <tr>
                                            <td rowspan="2">5
                                            </td>
                                            <td rowspan="2">Gerakan Pekerja Sehat
                                            </td>
                                            <td>Melaksanakan kegiatan Gerakan Pekerja Sehat (GPS) dalam upaya P2
                                                Covid-19 di tempat kerja </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p5" id="radio4" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p5" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Melaksanakan sebagian kegiatan Gerakan Pekerja
                                                Sehat (GPS) dalam upaya P2 Covid-19 di tempat kerja </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p5" id="radio4" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-------6-------->
                                        <tr>
                                            <td rowspan="1">6
                                            </td>
                                            <td rowspan="1">Stigma dan diskriminasi
                                            </td>
                                            <td>Tidak memperlakukan kasus positif sebagai
                                                suatu stigma dan tidak mendiskriminasi pekerja
                                                yang positif Covid-19 maupun yang telah sembuh dari Covid-19 </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p6" id="radio4" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="1">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p6" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                            
                                            
                                        </tr>
                                        <!-------7-------->
                                        <tr>
                                            <td rowspan="1">7
                                            </td>
                                            <td rowspan="1">Sosialisasi Dialog
                                            </td>
                                            <td>Pelaksanaan sosial dialog: <br>
                                                Partisipasi aktif dalam penyusunan kebijakan dan mengkomunikasikan
                                                kebijakan dan program P2 Covid-19 </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p7" id="radio4" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="1">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p7" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <!-------8-------->
                                        <tr>
                                            <td rowspan="2">8
                                            </td>
                                            <td rowspan="2">Penilaian risiko Covid-19 di tempat kerja <br>
                                                a. Melakukan dan mendokumentasikan
                                                penilaian risiko di tempat kerja <br>
                                                b. Melakukan dan mendokumentasikan penilaian
                                                risiko pada pekerja
                                            </td>
                                            <td>Perusahaan telah melakukan poin 8.a dan 8.b </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p8" id="radio4" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p8" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Perusahaan telah melakukan poin 8.a atau poin 8.b </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p8" id="radio4" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-------9-------->
                                        <tr>
                                            <td rowspan="2">9
                                            </td>
                                            <td rowspan="2">Struktur organisasi dan Team P2 Covid-19 : <br>
                                                a. Memiliki struktur organisasi khusus tim
                                                Covid- 19 dalam kepengurusan P2K3 <br>
                                                b. Memiliki Team/ Satuan Tugas K3 P2 Covid-19
                                                di tempat kerja
                                            </td>
                                            <td>Perusahaan telah memiliki poin 9.a dan 9.b </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p9" id="radio4" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p9" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Perusahaan telah memiliki poin 9.a atau poin 9.b </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p9" id="radio4" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-------10-------->
                                        <tr>
                                            <td rowspan="2">10
                                            </td>
                                            <td rowspan="2"> Mengalokasikan dana khusus dalam pelaksanaan
                                                program P2 Covid-19 di Tempat Kerja
                                            </td>
                                            <td>Sudah ada secara khusus </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p10" id="radio4" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p10" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sudah ada tapi belum secara khusus </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p10" id="radio4" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-------11-------->
                                        <tr>
                                            <td rowspan="2">11
                                            </td>
                                            <td rowspan="2"> Pencatatan dan pelaporan <br>
                                                a. Membuat catatan kegiatan tim Covid-19 di
                                                tempat kerja
                                                b. Membuat pencatatan jika terjadi kasus Covid19 di tempat kerja
                                                c. Membuat laporan institusi terkait jika
                                                terjadi kasus Covid-19 ditempat kerja.
                                            </td>
                                            <td>Perusahaan telah melakukan poin 11.a s.d 11.c </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p11" id="radio4" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p11" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Perusahaan telah melakukan poin 11.a dan 11.c atau poin 11.b dan 11.c </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p11" id="radio4" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-------12-------->
                                        <tr>
                                            <td rowspan="3">12
                                            </td>
                                            <td rowspan="3">Penilaian Evaluasi terhadap : <br> <br>
                                                a.Kinerja tim Covid-19 perusahaan
                                                <br> <br>
                                                b.Tingkat pengetahuan dan perilaku pekerja
                                                <br> <br>
                                                c.Sarana dan prasarana pencegahan dan penanggulangan Covid19 di tempat kerja
                                            </td>
                                            <td>Perusahaan telah melakukan poin 12.a s.d 12.c </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p12" id="a3" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p12" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Perusahaan telah melakukan poin 12.a atau poin 12.b atau 12.c</td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p12" id="b3" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Perusahaan telah melakukan poin 12.a dan 12.b atau poin 12.a
                                                dan 12.c atau poin 12.b dan 12.c </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p12" id="c34" value="30" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-------13-------->
                                        <tr>
                                            <td rowspan="2">13
                                            </td>
                                            <td rowspan="2"> Pengabdian Masyarakat
                                            </td>
                                            <td>Menjalankan program/ kegiatan P2 Covid-19 terhadap
                                                masyarakat di luar perusahaan (CSR) 2 kali atau lebih</td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p13" id="radio4" value="100" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                            <td rowspan="2">
                                            <div class="form-group">
                                                <input type="file" name="berkas_p13" required id="filer_input2" multiple="multiple"
                                                value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                                <span class="help-block"><small> (Max 2MB)</small></span>                       
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Menjalankan program/ kegiatan P2
                                                Covid-19 terhadap masyarakat di luar
                                                perusahaan (CSR) 1 kali </td>
                                            <td>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="p13" id="radio4" value="60" required>
                                                    <label for="radio4"></label>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-offset-11 col-sm-12">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Kirim</button>
                                    <?php echo form_close(); 
                                    ?>
                                    <!-- <a href="<?php echo site_url() ?>P2covid/pertanyaan_covid"><button type="button" class="btn btn-danger">Reset</button></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>