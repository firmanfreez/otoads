<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1><?= $title ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                                <table class="table table-striped table-bordered datatable-extended">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemilik Rekening</th>
                                            <th>Nama Bank</th>
                                            <th>Nomor Rekening</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = "1";
                                        foreach ($pembayaran as $p) : ?>
                                          <tr>
                                            <td><?php echo $num++ ?></td>
                                            <td><?php echo $p['nama_pemilik_rekening']; ?></td>
                                            <td><?php echo $p['nama_bank']; ?></td>
                                            <td><?php echo $p['nomor_rekening']; ?></td>
                                            <td>
                                              <p><a class="btn btn-info" href="<?php echo site_url('/a_pembayaran/edit/'.$p['id_pembayaran']); ?>"><span class="fa fa-pencil" ></span></a></p>
                                              <p><a class="btn btn-danger" href="<?php echo site_url('/a_pembayaran/delete/'.$p['id_pembayaran']); ?>"><span class="fa fa-trash" ></span></a></p>
                                                <!-- <?php echo form_open('/a_pembayaran/delete/'.$p['id_pembayaran']); ?><input type="submit" class="btn btn-danger" value="DELETE"></form> -->
                                            </td>
                                          </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
