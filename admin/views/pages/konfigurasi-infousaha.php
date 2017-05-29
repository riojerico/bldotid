<?php
$konfigurasi=new Konfigurasi();
  $tab = $konfigurasi->tab_info($member_id);

?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Konfigurasi <small>Halaman konfigurasi informasi usaha.</small></h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Informasi Usaha</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- Smart Wizard -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                        <ul class="wizard_steps">
                          <?php
                          $no=1;
                          foreach ($tab as $data) {
                          ?>
                            <li class="active">
                                <a href="#step-<?php echo $no ?>">
                                    <span class="step_no"><?php echo $no ?></span>
                                    <span class="step_descr">
                                    Langkah <?php echo $no ?><br />
                                    <small><b><?php echo $data->menu ?></b><br> (<i><?php echo $data->menu_eng ?></i>)</small>
                                    </span>
                                </a>
                            </li>
                          <?php
                          $no++;
                          } ?>
                        </ul>


                        <div id="step-1">
                            <form class="form-horizontal">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap Pemilik <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <label for="" class="control-label blue">
                                      <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="right" title="Nama pemilik usaha"></i>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No. HP Pribadi <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" required="required" class="form-control col-md-7 col-xs-12" placeholder="+62">
                                    </div>
                                    <label for="" class="control-label blue">
                                      <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="right" title="Digunakan untuk pemberitahuan informasi dari BUATLAPAK.ID serta keamanan website"></i>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No. NPWP
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Contoh: 807753405xxxx000">
                                    </div>
                                    <label for="" class="control-label blue">
                                      <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="top" title="Jika anda memiliki Nomor Wajib Pajak, harap diisi"></i>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto Profil
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <br><br>
                                    <div class="" align="center">
                                      <img src="<?php echo $base_url ?>/assets/images/blid-images/def.jpg" alt="" width="170px" class="img-circle img-responsive img-raised">
                                    </div>

                                  </div>

                                  <!-- <div class="form-group" align="right">
                                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                                  </div> -->

                            </form>

                        </div>
                        <?php
                        #### Informasi Usaha ####
                        ?>
                        <div id="step-2">
                          <form class="form-horizontal">
                            <br>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Nama Usaha</label>
                              <div class="col-sm-4">
                              <input type="text" name="" value="" class="form-control">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-3 control-label">Alamat Web / Domain *</label>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="" value="">
                              </div>
                              <label for="" class="control-label blue">
                                <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="top" title="Alamat dari web e commerce anda"></i>
                              </label>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-3 control-label">Email *</label>
                              <div class="col-sm-4">
                                <input type="email" class="form-control" placeholder="" value="">
                              </div>
                              <label for="" class="control-label blue">
                                <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="top" title="Digunakan untuk login ke halaman administrator website anda"></i>
                              </label>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-3 control-label">Ganti Password</label>
                              <div class="col-sm-1">
                                <button type="button" class="btn btn-warning" name="button"> <i class="fa fa-key"></i></button>
                              </div>
                              <label for="" class="control-label blue">
                                <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="top" title="Jika anda ingin mengganti password anda saat ini"></i>
                              </label>
                            </div>

                            <div class="form-group" align="right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                          </form>

                            <hr>
                          <form class="form-horizontal">
                            <div class="form-group">
                              <label>Logo Usaha</label>
                              <input type="file" id="exampleInputFile">
                              <img src="<?php echo $base_url ?>/assets/images/blid-images/logo1.png" alt="" width="200px" class="img-rounded img-responsive img-raised">
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Logo Text</label>
                              <div class="col-sm-4">
                              <input type="text" name="" value="" class="form-control" placeholder="Cnth: Buatlapak.id">
                              </div>
                              <label for="" class="control-label blue">
                                <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="top" title="Diperlukan jika anda tidak memiliki logo gambar"></i>
                              </label>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Slogan</label>
                              <div class="col-sm-4">
                              <input type="text" name="" value="" class="form-control">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Deskripsi Usaha</label>
                              <div class="col-sm-9">
                                <textarea name="name" rows="4" cols="100%" class="form-control" placeholder="Cnth: Buatlapak.id merupakan social e-commerce instan untuk mendukung seluruh UKM di Indonesia."></textarea>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Kata Kunci</label>
                              <div class="col-sm-9">
                                <textarea name="name" rows="2" cols="100%" class="form-control" placeholder="Cnth: Jual makanan ringan semarang, makanan murah meriah, ukm makanan ringan semarang, peralatan mendaki gunung bandung, dll."></textarea>
                              </div>
                              <label for="" class="control-label blue">
                                <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="top" title="Digunakan sebagai kata kunci dalam pencarian search engine untuk SEO Web anda"></i>
                              </label>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Alamat Usaha</label>
                              <div class="col-sm-9">
                                <textarea name="name" rows="4" cols="100%" class="form-control" placeholder="Jl."></textarea>
                              </div>
                            </div>


                            <!-- <div class="form-group" align="right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            </div> -->
                          </form>
                        </div>

                        <?php
                        #### Pembayaran ####
                        $set_limit_wkt_bayar = $konfigurasi->set_limit_wkt_bayar($member_id);
                        ?>
                        <div id="step-3">
                          <form class="form-horizontal">
                            <div class="form-group">
                              <br><br>
                              <label class="col-sm-3 control-label">Limit Waktu Pembayaran</label>
                              <div class="col-sm-1">
                              <input type="number" name="" value="<?php echo $set_limit_wkt_bayar->limit_wkt_bayar ?>" class="form-control">
                              </div>
                              <label for="" class="control-label blue">
                                <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="right" title="<?php echo $set_limit_wkt_bayar->deskripsi ?>"></i>
                              </label>
                            </div>
                            <hr>

                            <div class="alert alert-info alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Panduan!</strong><p>Data rekening ditampilkan saat pelanggan ingin melakukan pembayaran. Data bank tidak akan ditampilkan jika no rekening dan atau atas nama rekening dikosongkan. </p>
                                </div>

                            <?php
                            $loop=1;
                            $list_bank = $konfigurasi->list_bank();
                            foreach ($list_bank as $bank) {
                              $pembayaran = $konfigurasi->pembayaran($member_id,$loop);
                              if ($pembayaran==true) {
                                $an  = $pembayaran->atas_nama;
                                $rek = $pembayaran->no_rek;
                              }else{
                                $an ="";
                                $rek="";
                              }
                            ?>
                            <div class="info-box">
                              <span class="">  <img src="<?php echo $base_url.'/assets/images/blid-images/bank/'.$bank->logo ?>" height="80" width="180" border="1"></span>
                              <div class="col-md-4">
                                <span class="info-box-text">Bank <?php echo $bank->bank ?></span>
                                <span class=""><input type="text" name="nm_bank" value="<?php echo $an ?>" placeholder="a.n Rio Doe" class="form-control"></span>
                                <span class=""><input type="text" name="no_rek" value="<?php echo $rek ?>" placeholder="No. Rekening" class="form-control"></span>
                              </div><br><br><br>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <?php
                            $loop++;
                            }
                            ?>

                          </form>
                        </div>
                        <?php
                        #### Kontak ####

                        ?>
                        <div id="step-4">
                          <form class="form-horizontal">
                            <br><br>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Email *</label>
                              <div class="col-sm-4">
                              <input type="email" name="" value="" class="form-control">
                              </div>
                              <label for="" class="control-label blue">
                                <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="right" title="Alamat email yang digunakan untuk proses bisnis anda, seperti order, pembayaran, dan pesan dari pelanggan."></i>
                              </label>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-3 control-label">No. Telepon *</label>
                              <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="+62" value="">
                              </div>
                              <label for="" class="control-label blue">
                                <i class="fa fa-info-circle" data-toggles="tooltip" data-placement="right" title="Nomor telepon usaha anda untuk menerima panggilan dari pelanggan"></i>
                              </label>
                            </div>

                          </form>
                        </div>
                        <?php
                        #### Sosial Media ####

                        ?>
                        <div id="step-5">
                          <form class="form-horizontal">

                            <?php
                            $loop=1;
                            $list_sosmed = $konfigurasi->list_sosmed();
                            foreach ($list_sosmed as $sosmed) {
                              $sosmed_member = $konfigurasi->sosmed($member_id,$loop);
                              if ($sosmed_member==true) {
                                $link  = $sosmed_member->link;
                              }else{
                                $link ="";
                              }
                            ?>
                              <div class="info-box">
                                <span class="">  <img src="<?php echo $base_url.'/assets/images/blid-images/sosmed/'.$sosmed->logo ?>" alt="" height="80"></span>
                                <div class="col-md-4">
                                  <span class="info-box-text"><?php echo $sosmed->sosmed ?></span>
                                  <span class=""><input type="text" name="" value="<?php echo $link ?>" placeholder="<?php echo $sosmed->sosmed ?>.com/nama_sosmed_usaha" class="form-control"></span>
                                </div>
                                <!-- /.info-box-content -->
                              </div>
                              <!-- /.info-box -->
                              <?php
                              $loop++;
                              }
                              ?>

                          </form>
                        </div>
                        <?php
                        #### Notifikasi ####

                        ?>
                        <div id="step-6">
                          <form class="form-horizontal">
                            <br><br>
                            <?php
                            $loop=1;
                            $list_notif = $konfigurasi->list_notif();
                            $data_notif = $konfigurasi->data_notif($member_id,$loop);

                            foreach ($list_notif as $list) {
                            ?>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Notifikasi <?php echo $list->notif ?></label>
                              <div class="col-sm-4">
                                <?php
                                  if ($pane->aktif=='1') {
                                    $status = "checked";
                                  }else{
                                    $status = "";
                                  }
                                ?>
                                <label class="control-label">
                                  <input type="radio" name="status<?php echo $list->id?>" class="minimal control-label" <?php echo $status ?>> Aktif
                                </label>
                                <?php
                                  if ($pane->aktif=='0') {
                                    $status = "checked";
                                  }else{
                                    $status = "";
                                  }
                                ?>
                                <label class="control-label">
                                  <input type="radio" name="status<?php echo $list->id?>" class="minimal control-label" <?php echo $status ?>> Nonaktif
                                </label>

                              </div>
                            </div>
                            <hr>
                            <?php
                          //  $loop++;
                            } ?>

                          </form>
                        </div>

                    </div>
                    <!-- End SmartWizard Content -->



                </div>
            </div>
        </div>

    </div>
</div>
