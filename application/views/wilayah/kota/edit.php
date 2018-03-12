<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open('a_kota/update'); ?>
                              <div class="form-horizontal">
                                <input hidden name="id_kota" value="<?php echo $kota['id_kota'] ?>">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Kota</label>
                                      <div class="col-md-10">
                                          <input type="text" name="nama_kota" class="form-control" value="<?php echo $kota['nama_kota']; ?>">
                                      </div>
                                  </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Nama Wilayah</label>
                                            <select class="bs-select col-md-10" title="Pilih Nama Wilayah" name="id_wilayah">
                                              <?php foreach ($wilayah as $w) : ?>
                                                <option value="<?php echo $w['id_wilayah']; ?>" <?php if ($kota['id_wilayah']==$w['id_wilayah']) {echo 'selected';} ?>><?php echo $w['nama_wilayah']; ?></option>
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
