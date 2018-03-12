<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed block-info">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                              <a href="<?php base_url(); ?>../a_transaksi"><button class="btn btn-info">Kembali</button></a>
                                <center><h1 style="text-transform: uppercase">DETAIL DATA DRIVER <?= $title ?></h1></center>
                            </div>
                            <div class="block-content">
                              <div class="col-md-7">
                                <div class="panel panel-info">
                                      <div class="panel-heading">
                                          <h3 class="panel-title"><span class="icon-car"></span>Data Driver</h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Nama Lengkap</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['nama_lengkap']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Jenis Kelamin</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['jenis_kelamin']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Status</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['status']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Email</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['email']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Password</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['password']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Nomor Telepon</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['nomor_telepon']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Pekerjaan</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['pekerjaan']; ?>"/>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Nama Pemilik Kendaraan</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['nama_pemilik_kendaraan']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Nomor Polisi Kendaraan</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['nomor_polisi_kendaraan']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Nama Kota</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['nama_kota']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Nama Wilayah</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['nama_wilayah']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Merk Kendaraan</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['merk']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Tipe Kendaraan</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['tipe']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Tahun Kendaraan</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['tahun']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Warna Kendaraan</label>
                                              <input readonly class="form-control" value="<?php echo $transaksi['warna']; ?>"/>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                <div class="panel panel-info">
                                      <div class="panel-heading">
                                          <h3 class="panel-title"><span class="icon-map-marker"></span>Distance Driver</h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Perjalanan Hari Ini</label>
                                              <input readonly class="form-control" value="<?php echo $distance['perjalanan_hari_ini']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Perjalanan Kemarin</label>
                                              <input readonly class="form-control" value="<?php echo $distance['perjalanan_kemarin']; ?>"/>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Total Perjalanan</label>
                                              <input readonly class="form-control" value="<?php echo $distance['total_perjalanan']; ?>"/>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                                        <div class="panel-footer">
                                        <div class="panel-elements pull-right">
                                          <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_distance/edit/'.$distance['id_distance']); ?>"><span class="fa fa-pencil" ></span></a>
                                        </div>
                                    </div>
                                      </div>
                                  </div>
                              <div class="col-md-5">
                                <div class="app-accordion">
                                        <div class="item">
                                            <div class="heading">
                                                <div class="title">STNK</div>
                                            </div>
                                            <div class="content">
                                                <div class="block">
                                                    <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_transaksi/<?php echo $transaksi['stnk_gambar']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="heading">
                                                <div class="title">SIM</div>
                                            </div>
                                            <div class="content">
                                                <div class="block">
                                                    <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_transaksi/<?php echo $transaksi['sim_gambar']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="heading">
                                                <div class="title">KTP</div>
                                            </div>
                                            <div class="content">
                                                <div class="block">
                                                    <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_transaksi/<?php echo $transaksi['ktp_gambar']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-md-12">
                                    <div class="panel panel-info">
                                          <div class="panel-heading">
                                              <h3 class="panel-title"><span class="icon-spell-check"></span>Check In Driver</h3>
                                          </div>
                                          <div class="panel-body">
                                            <table class="table table-striped table-bordered datatable-extended">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tanggal Check In</th>
                                                        <th>Waktu Check In</th>
                                                        <th>Foto</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $num = "1";
                                                    foreach ($check as $c) : ?>
                                                      <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $c['tanggal']; ?></td>
                                                        <td><?php echo $c['waktu']; ?></td>
                                                        <td style="width: 25%;">
                                                        <div class="col-md-3">
                                                          <div class="tile-basic">
                                                            <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="<?php echo site_url(); ?>assets/images/data_check/<?php echo $c['f_samping_kiri']; ?>" data-preview-size="modal-lg">
                                                                <img src="<?php echo site_url(); ?>assets/images/data_check/<?php echo $c['f_samping_kiri']; ?>">
                                                            </a>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <div class="tile-basic">
                                                          <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="<?php echo site_url(); ?>assets/images/data_check/<?php echo $c['f_samping_kanan']; ?>" data-preview-size="modal-lg">
                                                              <img src="<?php echo site_url(); ?>assets/images/data_check/<?php echo $c['f_samping_kanan']; ?>">
                                                          </a>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <div class="tile-basic">
                                                        <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="<?php echo site_url(); ?>assets/images/data_check/<?php echo $c['f_belakang']; ?>" data-preview-size="modal-lg">
                                                            <img src="<?php echo site_url(); ?>assets/images/data_check/<?php echo $c['f_belakang']; ?>">
                                                        </a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="tile-basic">
                                                      <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="<?php echo site_url(); ?>assets/images/data_check/<?php echo $c['f_speedometer']; ?>" data-preview-size="modal-lg">
                                                          <img src="<?php echo site_url(); ?>assets/images/data_check/<?php echo $c['f_speedometer']; ?>">
                                                      </a>
                                                  </div>
                                                </div>

                                                        </td>
                                                        <td style="width: 23%;">
                                                          <center>
                                                          <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_check/edit/'.$c['id_check']); ?>"><span class="fa fa-pencil" ></span></a>
                                                          <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_check/delete/'.$c['id_check']); ?>"><span class="fa fa-trash" ></span></a>
                                                        </center>
                                                        </td>
                                                      </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><span class="icon-envelope"></span>Data Pesan Driver</h3>
                                                </div>
                                                <div class="panel-body">
                                                  <table class="table table-striped table-bordered datatable-extended">
                                                      <thead>
                                                          <tr>
                                                              <th>No</th>
                                                              <th>Judul Pesan</th>
                                                              <th>Isi Pesan</th>
                                                              <th>Aksi</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php
                                                          $num = "1";
                                                          foreach ($pesan as $p) : ?>
                                                            <tr>
                                                              <td><?php echo $num++ ?></td>
                                                              <td><?php echo $p['judul_pesan']; ?></td>
                                                              <td><?php echo $p['isi_pesan']; ?></td>
                                                              <td style="width: 23%;">
                                                                <center>
                                                                <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_transaksi/delete_pesan/'.$p['id_pesan']); ?>"><span class="fa fa-trash" ></span></a>
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
</div>
<!-- END PAGE CONTAINER -->
            <!-- MODAL PREVIEW -->
            <div class="modal fade" id="preview" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                    <div class="modal-content">
                        <center><div class="modal-body"></div></center>
                    </div>
                </div>
            </div>
            <!-- END MODAL PREVIEW -->
            <!-- <script>
              function id_gr($id_check){
                $('#id_check').val($id_check);
              }
            </script> -->
            <!-- <script type="text/javascript">
            var myRoomNumber;

            $('#rooms li a').click(function() {
             myRoomNumber = $(this).attr('data-id');
            });

            $('#myModal').on('show.bs.modal', function (e) {
              $(this).find('.roomNumber').text(myRoomNumber);
            });
            </script> -->
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/isotope/isotope.pkgd.min.js"></script>
