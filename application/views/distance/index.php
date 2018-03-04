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
                                            <th>Nama Driver</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = "1";
                                        foreach ($distance as $d) : ?>
                                          <tr>
                                            <td><?php echo $num++ ?></td>
                                            <td><?php echo $d['nama_lengkap']; ?></td>
                                            <td>
                                              <center><p><a class="btn btn-primary" href="<?php echo site_url('/a_distance/'.$d['id_distance']); ?>"><span class="fa fa-eye" ></span></a></p></center>
                                              <center><p><a class="btn btn-info" href="<?php echo site_url('/a_distance/edit/'.$d['id_distance']); ?>"><span class="fa fa-pencil" ></span></a></p></center>
                                              <center><p><a class="btn btn-danger" href="<?php echo site_url('/a_distance/delete/'.$d['id_distance']); ?>"><span class="fa fa-trash" ></span></a></p></center>
                                            </td>
                                          </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
