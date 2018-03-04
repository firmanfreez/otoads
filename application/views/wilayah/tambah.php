<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open_multipart('a_awilayah/tambah'); ?>
                              <div class="form-horizontal">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Kota</label>
                                      <div class="col-md-10">
                                          <input type="text" name="nama_kota" class="form-control">
                                      </div>
                                  </div>
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Wilayah</label>
                                        <select class="bs-select col-md-10" name="id_transaksi">
                                          <option>Pilih Nama Wilayah</option>
                                          <?php foreach ($wilayah as $w) : ?>
                                            <option value="<?php echo $w['id_wilayah']; ?>"><?php echo $w['nama_wilayah']; ?></option>
                                          <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <center><button type="button" class="btn btn-success">SUBMIT</button></center>
                                 </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
