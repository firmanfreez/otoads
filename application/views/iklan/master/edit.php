<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed block-info">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                              <a href="#" onclick="history.go(-1);"><button class="btn btn-info">Kembali</button></a>
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open('a_master_iklan/update');?>
                              <div class="form-horizontal">
                                <input hidden name="id_master_iklan" value="<?php echo $m_iklan['id_master_iklan'] ?>">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Driver</label>
                                        <select class="bs-select col-md-10" title="Pilih Nama Driver" name="id_transaksi">
                                          <?php foreach ($transaksi as $t) : ?>
                                            <option value="<?php echo $t['id_transaksi']; ?>" <?php if ($m_iklan['id_transaksi']==$t['id_transaksi']) {echo 'selected';} ?>><?php echo $t['nama_lengkap']; ?></option>
                                          <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Nama Iklan</label>
                                            <select class="bs-select col-md-10" title="Pilih Nama Iklan" name="id_iklan">
                                              <?php foreach ($iklan as $i) : ?>
                                                <option value="<?php echo $i['id_iklan']; ?>" <?php if ($m_iklan['id_iklan']==$i['id_iklan']) {echo 'selected';} ?>><?php echo $i['nama_iklan']; ?></option>
                                              <?php endforeach; ?>
                                            </select>
                                        </div>
                                <div class="form-group">
                                  <center><button type="submit" class="btn btn-success">SUBMIT</button></center>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
