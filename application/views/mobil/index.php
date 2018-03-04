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
                                            <th>Merk Kendaraan</th>
                                            <th>Tipe Kendaraan</th>
                                            <th>Tahun Kendaraan</th>
                                            <th>Warna Kendaraan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = "1";
                                        foreach ($mobil as $m) : ?>
                                          <tr>
                                            <td><?php echo $num++ ?></td>
                                            <td><?php echo $m['merk']; ?></td>
                                            <td><?php echo $m['tipe']; ?></td>
                                            <td><?php echo $m['tahun']; ?></td>
                                            <td><?php echo $m['warna']; ?></td>
                                            <td>
                                              <center><p><a class="btn btn-info" href="<?php echo site_url('/a_mobil/edit/'.$m['id_merk']); ?>"><span class="fa fa-pencil" ></span></a></p></center>
                                              <center><p><a class="btn btn-danger" href="<?php echo site_url('/a_mobil/delete/'.$m['id_merk']); ?>"><span class="fa fa-trash" ></span></a></p></center>                                              
                                            </td>
                                          </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
