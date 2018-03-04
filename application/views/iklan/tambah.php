<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open_multipart('a_wilayah/tambah'); ?>
                              <div class="form-horizontal">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Iklan</label>
                                      <div class="col-md-10">
                                          <input type="text" name="nama_iklan" class="form-control">
                                      </div>
                                  </div>
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
                                            <label class="col-md-2 control-label">Harga Iklan</label>
                                            <div class="col-md-10">
                                                <input type="text" name="harga_iklan" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Durasi Iklan</label>
                                              <div class="col-md-10">
                                                <input type="text" class="form-control bs-datepicker">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                                <label class="col-md-2 control-label">Area Stiker</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="area_stiker" class="form-control">
                                                </div>
                                            </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Nama Wilayah</label>
                                            <select class="bs-select col-md-10" name="id_transaksi">
                                              <option>Pilih Nama Wilayah</option>
                                              <?php foreach ($wilayah as $w) : ?>
                                                <option value="<?php echo $w['id_wilayah']; ?>"><?php echo $w['nama_kota']; ?></option>
                                              <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Wilayah</label>
                                                <select class="bs-select col-md-10 wilayah" name="id_wilayah" id="wilayah">
                                                  <option>Pilih Wilayah</option>
                                                  <?php foreach ($kota as $key => $k): ?>
                                                    <option value="<?php echo $k['id_wilayah']; ?>"><?php echo $k['nama_wilayah']; ?></option>
                                                  <?php endforeach; ?>
                                                </select>
                                            </div>
                                        <div class="form-group">
                                          <label class="col-md-2 control-label">Gambar Iklan</label>
                                          <div class="col-md-10">
                                              <input type="file" name="iklan_gambar">
                                          </div>
                                      </div>
                                    <center><button type="button" class="btn btn-success">SUBMIT</button></center>
                                 </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
