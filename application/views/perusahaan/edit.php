<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed block-info">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                              <a href="<?php base_url(); ?>../../a_perusahaan"><button class="btn btn-info">Kembali</button></a>
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open('a_perusahaan/update');?>
                              <div class="form-horizontal">
                                <input hidden name="id_perusahaan" value="<?php echo $perusahaan['id_perusahaan'] ?>">
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Nama Perusahaan</label>
                                          <div class="col-md-10">
                                            <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $perusahaan['nama_perusahaan']; ?>">
                                          </div>
                                      </div>
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Telepon Perusahaan</label>
                                      <div class="col-md-10">
                                        <input type="text" class="form-control" name="telepon_perusahaan" value="<?php echo $perusahaan['telepon_perusahaan']; ?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="col-md-2 control-label">Alamat Perusahaan</label>
                                        <div class="col-md-10">
                                            <input type="text" name="alamat_perusahaan" class="form-control" value="<?php echo $perusahaan['alamat_perusahaan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Email Perusahaan</label>
                                          <div class="col-md-10">
                                            <input type="text" class="form-control" name="email_perusahaan" value="<?php echo $perusahaan['email_perusahaan']; ?>">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-2 control-label">Nama PIC</label>
                                            <div class="col-md-10">
                                              <input type="text" class="form-control" name="pic" value="<?php echo $perusahaan['pic']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Nama PIC</label>
                                              <div class="col-md-10">
                                                <input type="text" class="form-control" name="pic" value="<?php echo $perusahaan['pic']; ?>">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                                <label class="col-md-2 control-label">Telepon PIC</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="telepon_pic" value="<?php echo $perusahaan['telepon_pic']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                  <label class="col-md-2 control-label">Alamat PIC</label>
                                                  <div class="col-md-10">
                                                    <input type="text" class="form-control" name="alamat_pic" value="<?php echo $perusahaan['alamat_pic']; ?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                    <label class="col-md-2 control-label">Email PIC</label>
                                                    <div class="col-md-10">
                                                      <input type="text" class="form-control" name="email_pic" value="<?php echo $perusahaan['email_pic']; ?>">
                                                    </div>
                                                </div>
                                <div class="form-group">
                                  <center><button type="submit" class="btn btn-success">SUBMIT</button></center>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
