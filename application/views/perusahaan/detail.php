<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed block-info">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                              <a href="<?php base_url(); ?>../a_perusahaan"><button class="btn btn-info">Kembali</button></a>
                                <center><h1 style="text-transform: uppercase">DETAIL DATA PIC <?= $title ?></h1></center>
                            </div>
                            <div class="block-content">
                              <div class="col-md-12">
                                <div class="panel panel-info">
                                      <div class="panel-heading">
                                          <h3 class="panel-title"><span class="icon-user"></span>Data Pengiklan</h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Nama pic</label>
                                              <input readonly class="form-control" value="<?php echo $perusahaan['pic']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Telepon pic</label>
                                              <input readonly class="form-control" value="<?php echo $perusahaan['telepon_pic']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Alamat pic</label>
                                              <input readonly class="form-control" value="<?php echo $perusahaan['alamat_pic']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Email pic</label>
                                              <input readonly class="form-control" value="<?php echo $perusahaan['email_pic']; ?>"/>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Nama Perusahaan</label>
                                              <input readonly class="form-control" value="<?php echo $perusahaan['nama_perusahaan']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Telepon Perusahaan</label>
                                              <input readonly class="form-control" value="<?php echo $perusahaan['telepon_perusahaan']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Alamat Perusahaan</label>
                                              <input readonly class="form-control" value="<?php echo $perusahaan['alamat_perusahaan']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Email Perusahaan</label>
                                              <input readonly class="form-control" value="<?php echo $perusahaan['email_perusahaan']; ?>"/>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              <div class="col-md-12">
                                <div class="panel panel-info">
                                      <div class="panel-heading">
                                          <h3 class="panel-title"><span class="icon-tablet"></span>Data Iklan PIC</h3>
                                      </div>
                                      <div class="panel-body">
                                        <table class="table table-striped table-bordered datatable-extended">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Iklan</th>
                                                    <th>Durasi Iklan</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = "1";
                                                foreach ($iklan as $c) : ?>
                                                  <tr>
                                                    <td><?php echo $num++ ?></td>
                                                    <td><a href="<?php echo site_url('/a_iklan/'.$c['id_iklan']); ?>"><?php echo $c['nama_iklan']; ?></a></td>
                                                    <td><?php echo $c['durasi_iklan']; ?></td>
                                                    <td><?php echo $c['status']; ?></td>
                                                    <td style="width: 23%;">
                                                      <center>
                                                      <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_iklan/edit/'.$c['id_iklan']); ?>"><span class="fa fa-pencil" ></span></a>
                                                      <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_iklan/delete/'.$c['id_iklan']); ?>"><span class="fa fa-trash" ></span></a>
                                                    </center>
                                                    </td>
                                                  </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                      </div>
                                      </div>
                                    </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
<!-- <div class="panel-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Pengiklan</label>
        <input readonly class="form-control" value="<?php echo $pengiklan['pengiklan']; ?>"/>
      </div>
      <div class="form-group">
        <label>Nama Iklan</label>
        <input readonly class="form-control" value="<?php echo $pengiklan['nama_iklan']; ?>"/>
      </div>
      <?php
      function f_num($besar){
      $num="".number_format($besar,0,',','.');
      return $num;
        }
       ?>
      <div class="form-group">
        <label>Harga Iklan</label>
        <input readonly class="form-control" value="<?php echo f_num($pengiklan['harga_iklan']); ?>"/>
      </div>
      <div class="form-group">
        <label>Durasi Iklan</label>
        <input readonly class="form-control" value="<?php echo $pengiklan['durasi_iklan']; ?>"/>
      </div>
      <div class="form-group">
        <label>Area Stiker</label>
        <input readonly class="form-control" value="<?php echo $pengiklan['area_stiker']; ?>"/>
      </div>
      <div class="form-group">
        <label>Wilayah</label>
        <input readonly class="form-control" value="<?php echo $pengiklan['nama_kota']; ?>, <?php echo $iklan['nama_wilayah']; ?>"/>
      </div>
      <div class="form-group">
        <label>Syarat Kendaraan</label>
        <input readonly class="form-control" value="<?php echo $pengiklan['merk']; ?>, <?php echo $iklan['tipe']; ?>, <?php echo $iklan['tahun']; ?>, <?php echo $iklan['warna']; ?>"/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Gambar Iklan</label><br>
          <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_iklan/<?php echo $iklan['iklan_gambar']; ?>">
      </div>
    </div>
</div>
  </div> -->
