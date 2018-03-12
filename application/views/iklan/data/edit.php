<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed block-info">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                              <a href="<?php base_url(); ?>../../a_iklan"><button class="btn btn-info">Kembali</button></a>
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open_multipart('a_iklan/update');?>
                              <div class="form-horizontal">
                                <input hidden name="id_iklan" value="<?php echo $iklan['id_iklan'] ?>">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Kota</label>
                                        <select class="bs-select col-md-10" title="Pilih Nama Kota" name="id_kota">
                                          <?php foreach ($wilayah as $w) : ?>
                                            <option value="<?php echo $w['id_kota']; ?>" <?php if ($iklan['id_kota']==$w['id_kota']) {echo 'selected';} ?>><?php echo $w['nama_kota']; ?></option>
                                          <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Nama Iklan</label>
                                          <div class="col-md-10">
                                            <input type="text" class="form-control" name="nama_iklan" value="<?php echo $iklan['nama_iklan']; ?>">
                                          </div>
                                      </div>
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Harga Iklan</label>
                                      <div class="col-md-10">
                                        <input type="text" class="form-control" name="harga_iklan" value="<?php echo $iklan['harga_iklan']; ?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="col-md-2 control-label">Durasi Iklan</label>
                                        <div class="col-md-10">
                                            <input type="date" name="durasi_iklan" class="form-control" value="<?php echo $iklan['durasi_iklan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Area Stiker</label>
                                          <div class="col-md-10">
                                            <input type="text" class="form-control" name="area_stiker" value="<?php echo $iklan['area_stiker']; ?>">
                                          </div>
                                      </div>
                                    <div class="form-group">
                                    <label class="col-md-2 control-label">Iklan Gambar</label>
                                    <div class="col-md-10">
                                      <input type="file" name="iklan_gambar"><br>
		                                    <img src="<?php echo base_url()?>assets/images/data_iklan/<?php echo $iklan['iklan_gambar'] ?>" width="100" name="iklan_gambar">
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
