<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed block-info" style="border-top: 1px solid #4FB5DD">
                            <!-- START HEADING -->
                            <div style="margin: 1% 2%;">
                              <center><h2><?= $title ?></h2></center>
                            </div>
                            <hr class="hr-border">
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
                                            <td style="width: 20%">
                                              <center>
                                              <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_mobil/edit/'.$m['id_merk']); ?>"><span class="fa fa-pencil" ></span></a>
                                              <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_mobil/delete/'.$m['id_merk']); ?>"><span class="fa fa-trash" ></span></a>
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
