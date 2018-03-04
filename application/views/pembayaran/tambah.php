<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open_multipart('a_pembayaran/tambah'); ?>
                              <div class="form-horizontal">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Pemakai</label>
                                        <select class="bs-select col-md-10" name="id_transaksi">
                                          <option>Pilih Nama Pemakai</option>
                                          <?php foreach ($transaksi as $t) : ?>
                                            <option value="<?php echo $t['id_transaksi']; ?>"><?php echo $t['nama_lengkap']; ?></option>
                                          <?php endforeach; ?>
                                        </select>
                                    </div>
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Pemilik Rekening</label>
                                      <div class="col-md-10">
                                          <input type="text" name="nama_pemilik_rekening" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="col-md-2 control-label">Nama Bank</label>
                                        <div class="col-md-10">
                                            <input type="text" name="nama_bank" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Nomor Rekening</label>
                                          <div class="col-md-10">
                                              <input type="text" name="nomor_rekening" class="form-control">
                                          </div>
                                      </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
