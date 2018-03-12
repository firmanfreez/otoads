<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                              <a href="#" onclick="history.go(-1);"><button class="btn btn-info">Kembali</button></a>
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open('a_distance/update'); ?>
                              <div class="form-horizontal">
                                <input hidden name="id_distance" value="<?php echo $distance['id_distance'] ?>">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Perjalanan Hari Ini</label>
                                      <div class="col-md-10">
                                          <input type="text" name="perjalanan_hari_ini" class="form-control" value="<?php echo $distance['perjalanan_hari_ini']; ?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="col-md-2 control-label">Perjalanan Kemarin</label>
                                        <div class="col-md-10">
                                            <input type="text" name="perjalanan_kemarin" class="form-control" value="<?php echo $distance['perjalanan_kemarin']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Nama Driver</label>
                                            <select class="bs-select col-md-10" title="Pilih Nama Driver" name="id_transaksi">
                                              <?php foreach ($transaksi as $t) : ?>
                                                <option value="<?php echo $t['id_transaksi']; ?>" <?php if ($distance['id_transaksi']==$t['id_transaksi']) {echo 'selected';} ?>><?php echo $t['nama_lengkap']; ?></option>
                                              <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <center><button type="submit" class="btn btn-success">SUBMIT</button></center>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
