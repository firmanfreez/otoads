<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                <center><h1 style="text-transform: uppercase">DETAIL DATA DISTANCE <?= $title ?></h1></center>
                            </div>
                            <div class="block-content">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Nama Driver</label>
                                    <input readonly class="form-control" value="<?php echo $distance['nama_lengkap']; ?>"/>
                                  </div>
                                  <div class="form-group">
                                    <label>Total Perjalanan</label>
                                    <input readonly class="form-control" value="<?php echo $distance['total_perjalanan']; ?>"/>
                                  </div>
                                </div>
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
                              </div>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
