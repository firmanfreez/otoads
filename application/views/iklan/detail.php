<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                <center><h1 style="text-transform: uppercase">DETAIL DATA IKLAN <?= $title ?></h1></center>
                            </div>
                            <div class="block-content">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Nama Iklan</label>
                                    <input readonly class="form-control" value="<?php echo $iklan['nama_iklan']; ?>"/>
                                  </div>
                                  <div class="form-group">
                                    <label>Nama Driver</label>
                                    <input readonly class="form-control" value="<?php echo $iklan['nama_lengkap']; ?>"/>
                                  </div>
                                  <div class="form-group">
                                    <label>Nama Website</label>
                                    <input readonly class="form-control" value="<?php echo $iklan['nama_website']; ?>"/>
                                  </div>
                                  <div class="form-group">
                                    <label>Harga Iklan</label>
                                    <input readonly class="form-control" value="<?php echo $iklan['harga_iklan']; ?>"/>
                                  </div>
                                  <div class="form-group">
                                    <label>Durasi Iklan</label>
                                    <input readonly class="form-control" value="<?php echo $iklan['durasi_iklan']; ?>"/>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Area Stiker</label>
                                    <input readonly class="form-control" value="<?php echo $iklan['area_stiker']; ?>"/>
                                  </div>
                                  <div class="form-group">
                                    <label>Wilayah</label>
                                    <input readonly class="form-control" value="<?php echo $iklan['nama_kota']; ?>, <?php echo $iklan['nama_wilayah']; ?>"/>
                                  </div>
                                  <div class="form-group">
                                    <label>Gambar Iklan</label><br>
                                      <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_iklan/<?php echo $iklan['iklan_gambar']; ?>">
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
