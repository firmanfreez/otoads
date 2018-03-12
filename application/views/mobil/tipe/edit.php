<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open('a_tipe/update'); ?>
                              <div class="form-horizontal">
                                <input hidden name="id_tipe" value="<?php echo $tipe['id_tipe'] ?>">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Tipe Kendaraan</label>
                                      <div class="col-md-10">
                                          <input type="text" name="tipe" class="form-control" value="<?php echo $tipe['tipe']; ?>">
                                      </div>
                                  </div>
                                        <center><button type="submit" class="btn btn-success">SUBMIT</button></center>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
