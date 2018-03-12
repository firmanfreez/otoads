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
                                            <th>Tanggal Check In</th>
                                            <th>Waktu Check In</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = "1";
                                        foreach ($check as $c) : ?>
                                          <tr>
                                            <td><?php echo $num++ ?></td>
                                            <td><?php echo $c['nama_lengkap']; ?></td>
                                            <td><?php echo $c['tanggal']; ?></td>
                                            <td><?php echo $c['waktu']; ?></td>
                                            <td style="width: 23%;">
                                              <center>
                                              <a class="btn btn-primary" href="<?php echo site_url('/a_check/'.$c['id_check']); ?>"><span class="fa fa-eye" ></span></a>
                                              <a class="btn btn-info" href="<?php echo site_url('/a_check/edit/'.$c['id_check']); ?>"><span class="fa fa-pencil" ></span></a>
                                              <a class="btn btn-danger" href="<?php echo site_url('/a_check/delete/'.$c['id_check']); ?>"><span class="fa fa-trash" ></span></a>
                                            </center>
                                            </td>
                                          </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
