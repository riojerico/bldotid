<?php
$halaman = new Halaman();

  $tab = $halaman->tab_halaman($member_id);
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>
                Halaman
                <small>
                  Pengaturan halaman-halaman single.
                </small>
            </h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Single</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <?php
                        foreach ($tab as $data) {
                          if ($data->posisi == '0') {
                            $active="active";
                          }else{
                            $active="";
                          }
                        ?>
                        <li role="presentation" class="<?php echo $active ?>"><a href="#<?php echo $data->id ?>" data-toggle="tab"><?php echo '<b>'.$data->menu.'</b> /<br><i>'.$data->menu_eng.'</i>' ?></a></li>
                        <?php } ?>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <?php
                        foreach ($tab as $pane) {
                          if ($pane->posisi == '0') {
                            $active="active";
                          }else{
                            $active="";
                          }
                        ?>
                          <div role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade <?php echo $active ?>  in" id="<?php echo $pane->id ?>">
                            <form class="form-horizontal">
                              <br>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-9">
                                  <?php
                                    if ($pane->aktif=='1') {
                                      $status = "checked";
                                    }else{
                                      $status = "";
                                    }
                                  ?>
                                  <label class="control-label">
                                    <input type="radio" name="status" class="minimal control-label" <?php echo $status ?>> Aktif
                                  </label>
                                  <?php
                                    if ($pane->aktif=='0') {
                                      $status = "checked";
                                    }else{
                                      $status = "";
                                    }
                                  ?>
                                  <label class="control-label">
                                    <input type="radio" name="status" class="minimal control-label" <?php echo $status ?>> Nonaktif
                                  </label>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Isi Halaman</label>
                                <div class="col-sm-10">
                                  <form>
                                    <textarea class="about form-control" name="<?php echo $pane->menu ?>"><?php echo $pane->isi ?></textarea>
                                  </form>
                                </div>
                              </div>

                              <div class="form-group" align="right">
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                              </div>
                            </form>

                          </div>
                          <?php } ?>

                      </div>
                  </div>
                </div>
            </div>
        </div>

        <br />
        <br />
        <br />

    </div>
</div>
