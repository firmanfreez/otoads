<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed block-info">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                              <a href="#"><button onclick="history.go(-1);" class="btn btn-info">Kembali</button></a>
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open_multipart('a_check/update');?>
                              <div class="form-horizontal">
                                <input hidden name="id_check" value="<?php echo $check['id_check'] ?>">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Driver</label>
                                        <select class="bs-select col-md-10" title="Pilih Nama Driver" name="id_transaksi">
                                          <?php foreach ($transaksi as $t) : ?>
                                            <option value="<?php echo $t['id_transaksi']; ?>" <?php if ($check['id_transaksi']==$t['id_transaksi']) {echo 'selected';} ?>><?php echo $t['nama_lengkap']; ?></option>
                                          <?php endforeach; ?>
                                        </select>
                                    </div>
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Tanggal Check In</label>
                                      <div class="col-md-10">
                                        <input type="date" class="form-control" name="tanggal" value="<?php echo $check['tanggal']; ?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="col-md-2 control-label">Waktu Check In</label>
                                        <div class="col-md-10">
                                            <input type="text" name="waktu" class="form-control bs-timepicker" value="<?php echo $check['waktu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-2 control-label">Foto Samping Kiri</label>
                                    <div class="col-md-10">
                                      <input type="file" name="f_samping_kiri"><br>
		                                    <img src="<?php echo base_url()?>assets/images/data_check/<?php echo $check['f_samping_kiri'] ?>" width="100">
                                    </div>
                                  </div>
                                <div class="form-group">
                                <label class="col-md-2 control-label">Foto Samping Kanan</label>
                                <div class="col-md-10">
                                  <input type="file" name="f_samping_kanan"><br>
                                    <img src="<?php echo base_url()?>assets/images/data_check/<?php echo $check['f_samping_kanan'] ?>" width="100">
                                </div>
                              </div>
                              <div class="form-group">
                              <label class="col-md-2 control-label">Foto Belakang</label>
                              <div class="col-md-10">
                                <input type="file" name="f_belakang"><br>
                                  <img src="<?php echo base_url()?>assets/images/data_check/<?php echo $check['f_belakang'] ?>" width="100">
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label">Foto Speedometer</label>
                            <div class="col-md-10">
                              <input type="file" name="f_speedometer"><br>
                                <img src="<?php echo base_url()?>assets/images/data_check/<?php echo $check['f_speedometer'] ?>" width="100">
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
<!--  -->
