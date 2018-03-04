<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                <center><h1 style="text-transform: uppercase">DETAIL DATA TRANSAKSI <?= $title ?></h1></center>
                            </div>
                            <div class="block-content">                              
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
                              <div class="row">
                                <div class="col-md-5">
                                  <div class="form-group">
                                    <label>STNK Gambar</label><br>
                                      <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_transaksi/<?php echo $transaksi['stnk_gambar']; ?>">
                                  </div>
                                </div>
                                <div class="col-md-5">
                                  <div class="form-group">
                                    <label>SIM Gambar</label><br>
                                      <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_transaksi/<?php echo $transaksi['sim_gambar']; ?>">
                                  </div>
                                </div>
                              </div>
                                <div class="form_group col-md-5">
                                  <label>KTP Gambar</label><br>
                                    <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_transaksi/<?php echo $transaksi['ktp_gambar']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
