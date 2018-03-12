<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open('a_mobil/update'); ?>
                              <div class="form-horizontal">
                                <input hidden name="id_merk" value="<?php echo $mobil['id_merk'] ?>">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Merk Kendaraan</label>
                                      <div class="col-md-10">
                                          <input type="text" name="merk" class="form-control" value="<?php echo $mobil['merk']; ?>">
                                      </div>
                                  </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Tipe Kendaraan</label>
                                            <select class="bs-select col-md-10" title="Pilih Tipe Kendaraan" name="id_tipe">
                                              <?php foreach ($tipe as $t) : ?>
                                                <option value="<?php echo $t['id_tipe']; ?>" <?php if ($mobil['id_tipe']==$t['id_tipe']) {echo 'selected';} ?>><?php echo $t['tipe']; ?></option>
                                              <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Tahun Kendaraan</label>
                                                <select class="bs-select col-md-10" title="Pilih Tahun Kendaraan" name="id_tahun">
                                                  <?php foreach ($tahun as $t) : ?>
                                                    <option value="<?php echo $t['id_tahun']; ?>" <?php if ($mobil['id_tahun']==$t['id_tahun']) {echo 'selected';} ?>><?php echo $t['tahun']; ?></option>
                                                  <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                  <label class="col-md-2 control-label">Warna Kendaraan</label>
                                                    <select class="bs-select col-md-10" title="Pilih Warna Kendaraan" name="id_warna">
                                                      <?php foreach ($warna as $w) : ?>
                                                        <option value="<?php echo $w['id_warna']; ?>" <?php if ($mobil['id_warna']==$w['id_warna']) {echo 'selected';} ?>><?php echo $w['warna']; ?></option>
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
