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
                                <h4 class="m-t-0 header-title"><b>Laporan</b></h4>
                                <form id="basic-form" action="<?php echo base_url().'index.php/Pertanyaan/simpan_pertanyaan';?>">
                                    <div>

                                    <h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah ada potensi bahaya kebakaran di tempat kerja ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p1" id="posp1" value="positif" required>
                                                <label  class="col-lg-12" for="posp1">Ada</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p1" id="negp1" value="negatif">
                                                <label for="negp1"  class="col-lg-12">Tidak ada</label>
                                            </div>
                                        </div>
                                    </section> 
                                    <h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah menggunakan, menyimpan atau memproduksi bahan kimia berbahaya  ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p2" id="posp2" value="positif" required>
                                                <label  class="col-lg-12" for="posp2">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p2" id="negp2" value="negatif">
                                                <label for="negp2"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
                                    </section> 
                                    <h3>Pertanyaan</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah menggunakan instalasi listrik ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p3" id="posp3" value="positif" required>
                                                <label  class="col-lg-12" for="posp3">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p3" id="negp3" value="negatif">
                                                <label for="negp3"  class="col-lg-12">tidak</label>
                                            </div>
                                        </div>
                                    </section> 
                                    <h3>Pertanyaan</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah menggunakan bejana bertekanan atau tangki timbun ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p4" id="posp4" value="positif" required>
                                                <label  class="col-lg-12" for="posp4">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p4" id="negp4" value="negatif">
                                                <label for="negp4"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
                                    </section> 
                                    <h3>Pertanyaan</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah menggunakan ketel uap ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p5" id="posp5" value="positif" required>
                                                <label  class="col-lg-12" for="posp5">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p5" id="negp5" value="negatif">
                                                <label for="negp5"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
                                    </section> 
                                    <h3>Pertanyaan</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah menggunakan mesin tenaga & produksi ?
                                                <span class="help-block">
                                                    <small>Tuliskan Nama standar dan Nomor/Kodenya. Misalnya SNI - 04-2000(Misalnya : penggerak mula, mesin perkakas, mesin produksi, tanur (furnace), mesin transmisi tenaga)</small>
                                                </span>
                                            </label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p6" id="posp6" value="positif" required>
                                                <label  class="col-lg-12" for="posp6">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p6" id="negp6" value="negatif">
                                                <label for="negp6"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
                                    </section> 
                                    <h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah menggunakan peralatan angkat dan angkut ?
                                            <span class="help-block">
                                                <small>(Misalnya : crane, belt conveyor, gondola)</small>
                                            </span>
                                            </label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p7" id="posp7" value="positif" required>
                                                <label  class="col-lg-12" for="posp7">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p7" id="negp7" value="negatif">
                                                <label for="negp7"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
                                    </section> 
                                    <h3>Pertanyaan</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah menggunakan elevator atau eskalator ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p8" id="posp8" value="positif" required>
                                                <label  class="col-lg-12" for="posp8">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p8" id="negp8" value="negatif">
                                                <label for="negp8"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
                                    </section> 
                                    <h3>Pertanyaan</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah menggunakan peralatan ukur ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p9" id="posp9" value="positif" required>
                                                <label  class="col-lg-12" for="posp9">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p9" id="negp9" value="negatif">
                                                <label for="negp9"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
                                    </section> 
                                    <h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah ada atau akan ada pekerjaan pengelasan ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p10" id="posp10" value="positif" required>
                                                <label  class="col-lg-12" for="posp10">Ada</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p10" id="negp10" value="negatif">
                                                <label for="negp10"  class="col-lg-12">Tidak ada</label>
                                            </div>
                                        </div>
</section> 
<h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah ada atau akan ada pekerjaan di ketinggian ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p11" id="posp11" value="positif" required>
                                                <label  class="col-lg-12" for="posp11">Ada</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p11" id="negp11" value="negatif">
                                                <label for="negp11"  class="col-lg-12">Tidak ada</label>
                                            </div>
                                        </div>
</section> 
<h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah ada atau akan ada pekerjaan di ruang terbatas ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p12" id="posp12" value="positif" required>
                                                <label  class="col-lg-12" for="posp12">Ada</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p12" id="negp12" value="negatif">
                                                <label for="negp12"  class="col-lg-12">Tidak ada</label>
                                            </div>
                                        </div>
</section> 
<h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah dilakukan pengukuran dan pengendalian lingkungan kerja ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p13" id="posp13" value="positif" required>
                                                <label  class="col-lg-12" for="posp13">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p13" id="negp13" value="negatif">
                                                <label for="negp13"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
</section> 
<h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah dilakukan pemeriksaan dan/atau pengujian lingkungan kerja ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p14" id="posp14" value="positif" required>
                                                <label  class="col-lg-12" for="posp14">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p14" id="negp14" value="negatif">
                                                <label for="negp14"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
</section> 
<h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah ada fasilitas pertolongan pertama pada kecelakaan P3K?</label>
                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p15" id="posp15" value="positif" required>
                                                <label  class="col-lg-12" for="posp15">Ada</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p15" id="negp15" value="negatif">
                                                <label for="negp15"  class="col-lg-12">Tidak ada</label>
                                            </div>
                                        </div>
</section> 
<h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah melakukan pemantauan kesehatan tenaga kerja tahun ini ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p16" id="posp16" value="positif" required>
                                                <label  class="col-lg-12" for="posp16">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p16" id="negp16" value="negatif">
                                                <label for="negp16"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
</section> 
<h3>Pertanyaan</h3>
                                     <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">Apakah memiliki sertifikat SMK3 ?</label>

                                            <div class="radio radio-success">
                                                <input type="radio" class="form-control required" name="p17" id="posp17" value="positif" required>
                                                <label  class="col-lg-12" for="posp17">Ya</label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio"  class="form-control required" name="p17" id="negp17" value="negatif">
                                                <label for="negp17"  class="col-lg-12">Tidak</label>
                                            </div>
                                        </div>
</section> 






                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>