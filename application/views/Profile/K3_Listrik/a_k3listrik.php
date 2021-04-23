<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">K3 Instalasi Kelistrikan<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
                                <div class="card-box table-responsive">
                                   
                                        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/K3listrik/simpan_k3listrik'; ?>">

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label">Apakah memiliki pembangkit listrik diatas 200 KVA ? </label>
                                                <div class="col-md-10">
                                                    <div class="radio radio-success">
                                                        <input type="radio" name="pembangkit" id="radio4" value="Ya" required <?php if($edit!='1') echo 'disabled'; ?> 
                                                        <?php if($data_k3listrik!=null){if($data_k3listrik[0]->pembangkit_listrik=="Ya") echo "checked";}?>>
                                                        <label for="radio4">Ya</label>
                                                    </div>

                                                    <div class="radio radio-success">
                                                        <input type="radio" name="pembangkit" id="radio4" value="Tidak" <?php if($edit!='1') echo 'disabled'; ?>
                                                        <?php if($data_k3listrik!=null){if($data_k3listrik[0]->pembangkit_listrik=="Tidak") echo "checked";}?>>
                                                        <label for="radio4">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Sumber bahaya instalasi listrik</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" <?php if($edit!='1') echo 'disabled'; ?> required name="bahaya" >
                                                    <?php if($data_k3listrik!=null)echo "<option>".$data_k3listrik[0]->sumber_bahaya."</option>";?>
                                                        <option>Pembangkit Listrik</option>
                                                        <option>Transmisi Listrik</option>
                                                        <option>Distribusi Listrik</option>
                                                        <option>Pemanfaatan Listrik</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Standar instalasi listrik</label>
                                                <div class="col-md-10">
                                                    <input type="text" <?php if($edit!='1') echo 'readonly=""'; ?> class="form-control" required name="standar"
                                                    value="<?php if($data_k3listrik!=null)echo $data_k3listrik[0]->standar_instalasi;?>">
                                                    <span class="help-block"><small>Tuliskan Nama standar dan Nomor/Kodenya. Misalnya SNI - 04-2000</small></span>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label">Apakah ada AK3 listrik ? </label>
                                                <div class="col-md-10">
                                                    <div class="radio radio-success">
                                                        <input type="radio" name="ak3" id="radio4" value="Ada" required <?php if($edit!='1') echo 'disabled'; ?>
                                                        <?php if($data_k3listrik!=null){if($data_k3listrik[0]->ada_k3=="Ada") echo "checked";}?>> 
                                                        <label for="radio4">Ada</label>
                                                    </div>

                                                    <div class="radio radio-success">
                                                        <input type="radio" name="ak3" id="radio4" value="Tidak" <?php if($edit!='1') echo 'disabled'; ?>
                                                        <?php if($data_k3listrik!=null){if($data_k3listrik[0]->ada_k3=="Tidak") echo "checked";}?>>
                                                        <label for="radio4">Tidak ada</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label">Apakah ada teknisi K3 listrik ? </label>
                                                <div class="col-md-10">
                                                    <div class="radio radio-success">
                                                        <input type="radio" name="teknisi" id="radio4" value="Ada" required <?php if($edit!='1') echo 'disabled'; ?>
                                                        <?php if($data_k3listrik!=null){if($data_k3listrik[0]->ada_teknisi=="Ada") echo "checked";}?>>
                                                        <label for="radio4">Ada</label>
                                                    </div>

                                                    <div class="radio radio-success">
                                                        <input type="radio" name="teknisi" id="radio4" value="Tidak" <?php if($edit!='1') echo 'disabled'; ?>
                                                        <?php if($data_k3listrik!=null){if($data_k3listrik[0]->ada_teknisi=="Tidak") echo "checked";}?>>
                                                        <label for="radio4">Tidak ada</label>
                                                    </div>
                                                </div>
                                            </div>

                                           


                                        </form>


                                  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>