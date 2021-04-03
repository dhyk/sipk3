<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <br>

            <div class="content">
                <div class="container">


                    <div class="row">
                        <div class="col-md-8">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Assesmen Mandiri Informasi Umum K3</b></h4>
                                <form id="basic-form" action="<?php echo base_url().'index.php/Pertanyaan/simpan_pertanyaan';?>" method="post">
                                <table class="tablesaw m-t-20 table m-b-0" data-tablesaw-mode="stack">
                                        <thead>
                                            <tr>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3" class="col-md-1" >No</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist" class="col-md-8">Indikator Penilaian</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1" colspan="2" class="col-md-3 text-center">Jawab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>1</td>
                                            <td> Apakah ada potensi bahaya kebakaran di tempat kerja ?</td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p1" id="a1" value="1" required>
                                                    <label for="radio4">Ada</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p1" id="b1" value="0" required>
                                                    <label for="radio4">Tidak ada</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------2-------->
                                            <tr>
                                            <td>2</td>
                                            <td>Apakah menggunakan, menyimpan atau memproduksi bahan kimia berbahaya ? </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p2" id="a2" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p2" id="b2" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                             <!-------3-------->
                                             <tr>
                                            <td>3</td>
                                            <td>Apakah menggunakan instalasi listrik ?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p3" id="a3" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p3" id="b3" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------4-------->
                                            <tr>
                                            <td>4</td>
                                            <td>Apakah menggunakan bejana bertekanan atau tangki timbun ?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p4" id="a4" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p4" id="b4" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------5-------->
                                            <tr>
                                            <td>5</td>
                                            <td>Apakah menggunakan ketel uap ?</td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p5" id="a5" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p5" id="b5" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                             <!-------6-------->
                                             <tr>
                                            <td>6</td>
                                            <td>Apakah menggunakan mesin tenaga & produksi ?<span class="help-block">
                                                    <small>Misalnya SNI - 04-2000 <br>
                                                    (Misalnya : penggerak mula, mesin perkakas, mesin produksi, tanur (furnace), mesin transmisi tenaga)</small>
                                                </span></td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p6" id="a6" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p6" id="b6" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------7-------->
                                            <tr>
                                            <td>7</td>
                                            <td>Apakah menggunakan peralatan angkat dan angkut ?<span class="help-block">
                                                    <small>(Misalnya : crane, belt conveyor, gondola)</small>
                                                </span></td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p7" id="a7" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p7" id="b7" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------8-------->
                                            <tr>
                                            <td>8</td>
                                            <td>Apakah menggunakan elevator atau eskalator ?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p8" id="a8" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p8" id="b8" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------9-------->
                                            <tr>
                                            <td>9</td>
                                            <td>Apakah menggunakan peralatan ukur ?</td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p9" id="a9" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p9" id="b9" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                             <!-------10-------->
                                             <tr>
                                            <td>10</td>
                                            <td>Apakah ada atau akan ada pekerjaan pengelasan ?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p10" id="a10" value="1" required>
                                                    <label for="radio4">Ada</label>
                                                    </div>
                                                </td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p10" id="b10" value="0" required>
                                                    <label for="radio4">Tidak ada</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------11-------->
                                            <tr>
                                            <td>11</td>
                                            <td>Apakah ada atau akan ada pekerjaan di ketinggian ?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p11" id="a11" value="1" required>
                                                    <label for="radio4">Ada</label>
                                                    </div>
                                                </td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p11" id="b11" value="0" required>
                                                    <label for="radio4">Tidak Ada</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------12-------->
                                            <tr>
                                            <td>12</td>
                                            <td>Apakah ada atau akan ada pekerjaan di ruang terbatas ?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p12" id="a12" value="1" required>
                                                    <label for="radio4">Ada</label>
                                                    </div>
                                                </td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p12" id="b12" value="0" required>
                                                    <label for="radio4">Tidak ada</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------13-------->
                                            <tr>
                                            <td>13</td>
                                            <td>Apakah dilakukan pengukuran dan pengendalian lingkungan kerja ?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p13" id="a13" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p13" id="b13" value="0" required>
                                                    <label for="radio4">Tidak ada</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------14-------->
                                            <tr>
                                            <td>14</td>
                                            <td>Apakah dilakukan pemeriksaan dan/atau pengujian lingkungan kerja ?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p14" id="a14" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p14" id="b14" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------15-------->
                                            <tr>
                                            <td>15</td>
                                            <td>Apakah ada fasilitas pertolongan pertama pada kecelakaan P3K?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p15" id="a15" value="1" required>
                                                    <label for="radio4">Ada</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p15" id="b15" value="0" required>
                                                    <label for="radio4">Tidak ada</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------16-------->
                                            <tr>
                                            <td>16</td>
                                            <td>Apakah melakukan pemantauan kesehatan tenaga kerja tahun ini ?</td>
                                                <td class="text-left">
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p16" id="a16" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p16" id="b16" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-------17-------->
                                            <tr>
                                            <td>17</td>
                                            <td>Apakah memiliki sertifikat SMK3 ?</td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p17" id="a17" value="1" required>
                                                    <label for="radio4">Ya</label>
                                                    </div>
                                                </td>
                                                <td class="text-left"> 
                                                    <div class="radio radio-success">
                                                    <input type="radio" name="p17" id="b17" value="0" required>
                                                    <label for="radio4">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                            </div>
                            <div class="form-group m-b-0">
 								<div class="col-sm-offset-10 col-sm-12">
 									<button type="submit" class="btn btn-info waves-effect waves-light">Kirim</button>
</form>
 									<a href="<?php echo site_url()?>Admin/laporan"><button type="button" class="btn btn-danger">Reset</button></a>
 								</div>
 							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>