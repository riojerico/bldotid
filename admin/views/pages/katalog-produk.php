<?php
$produk = new Produk();
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>
    Katalog
    <small>
      Menambahkan produk baru.
    </small>

</h3>
        </div>

    </div>
    <div class="" align="">
       <a class="btn btn-app" href="?<?php echo paramEncrypt('page=katalog-produk-tambah')?>">
           <i class="fa fa-plus-circle"></i> Tambah
       </a>
    </div>

    <div class="clearfix"></div>
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Produk</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <table class="table table-striped responsive-utilities jambo_table" border="1" id="produk">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Produk</th>
                          <th>Foto</th>
                          <th>Kategori</th>
                          <th>Harga</th>
                          <th>Kuantitas</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      $list_produk = $produk->list_produk($id_member);
                      foreach ($list_produk as $produks):
                      ?>
                      <tr class="even pointer">
                        <td width="2%"><?php echo $no ?></td>
                        <td width="10%"><?php  ?></td>
                        <td width="2%"></td>
                        <td width="20%"></td>
                        <td width="10%"></td>
                        <td width="2%"></td>
                        <td width="2%"></td>
                        <td width="16%"></td>
                      </tr>

                      <?php
                      $no++;
                      endforeach; ?>
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
