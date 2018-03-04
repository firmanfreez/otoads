<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                <center><h1 style="text-transform: uppercase">DETAIL DATA CHECK IN<?= $title ?></h1></center>
                            </div>
                            <div class="block-content">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Nama Driver</label>
                                    <input readonly class="form-control" value="<?php echo $check['nama_lengkap']; ?>"/>
                                  </div>
                                  <div class="form-group">
                                    <label>Tanggal Check In</label>
                                    <input readonly class="form-control" value="<?php echo $check['tanggal']; ?>"/>
                                  </div>
                                  <div class="form-group">
                                    <label>Waktu Check In</label>
                                    <input readonly class="form-control" value="<?php echo $check['waktu']; ?>"/>
                                  </div>
                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Foto Samping Kiri</label><br>
                                          <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_check/<?php echo $check['f_samping_kiri']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label>Foto Samping Kanan</label><br>
                                          <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_check/<?php echo $check['f_samping_kanan']; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Foto Belakang</label><br>
                                          <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_check/<?php echo $check['f_belakang']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label>Foto Speedometer</label><br>
                                          <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_check/<?php echo $check['f_speedometer']; ?>">
                                      </div>
                                  </div>
                                  </div>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
