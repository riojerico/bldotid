<?php
$konfigurasi= new Konfigurasi();
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>
    Konfigurasi
    <small>
      Pilih tema sesuai dengan bisnis / usaha Anda.
    </small>


</h3>
        </div>

    </div>



    <div class="clearfix"></div>
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tema Website</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <table class="table responsive-utilities jambo_table" border="1" id="tema">
                    <thead>
                    <tr>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $loop=1;
                    // $kategori =  $conn->query("SELECT * from rod_kategori order by id desc");
                    // while ($data=$kategori->fetch(PDO::FETCH_OBJ)) {
                    $list_tema = $konfigurasi->list_tema();
                    foreach ($list_tema as $tema) {
                    ?>
                    <tr>

                      <td width=""><img src="<?php echo $base_url ?>/assets/images/blid-images/tema/<?php echo $tema->img_prev ?>" alt="Raised Image" class="img-rounded img-responsive img-raised" width="900px"></td>
                      <td width="">
                        <table class="table table-stripped">
                          <tr>
                            <td>Nama Tema </td>
                            <td>: </td>
                            <td> <?php echo strtoupper($tema->tema) ?></td>
                          </tr>
                          <tr>
                            <td>Kategori </td>
                            <td>: </td>
                            <td> <?php echo $tema->kategori ?></td>
                          </tr>
                          <tr>
                            <td>Desainer </td>
                            <td>: </td>
                            <td> <?php echo $tema->desainer ?></td>
                          </tr>
                          <tr>
                            <td>Pilih Tema </td>
                            <td>: </td>
                            <?php
                            $tema = $konfigurasi->tema($member_id,$loop);
                            if ($tema->id_tema == $list_tema->id ) {
                              $status="Tidak Aktif";
                              $btn   ="";
                            }else{
                              $status="<i class='fa fa-star'></i> Aktif";
                              $btn   ="danger";
                            }
                            ?>

                            <td> <button type="button" class="btn bg-<?php echo $btn ?>" style="width:100px" name="button"> <?php echo $status ?></button></td>
                          </tr>
                        </table>
                        </td>

                    </tr>
                    <?php

                    $loop++;
                    }
                    ?>
                    </tbody>

                  </table>
                </div>
            </div>
        </div>

        <br />
        <br />
        <br />

    </div>
</div>
