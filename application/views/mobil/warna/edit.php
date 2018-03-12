<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open('a_warna/update'); ?>
                              <div class="form-horizontal">
                                <input hidden name="id_warna" value="<?php echo $warna['id_warna'] ?>">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Warna Kendaraan</label>
                                      <div class="col-md-10">
                                          <input type="text" name="warna" class="form-control" value="<?php echo $warna['warna']; ?>">
                                      </div>
                                  </div>
                                        <center><button type="submit" class="btn btn-success">SUBMIT</button></center>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
