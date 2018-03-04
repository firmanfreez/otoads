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
                                            <th>Nama</th>
                                            <th>Nomor Telepon</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status</th>
                                            <th>Email</th>
                                            <th>Pekerjaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = "1";
                                        foreach ($transaksi as $t) : ?>
                                          <tr>
                                            <td><?php echo $num++ ?></td>
                                            <td><?php echo $t['nama_lengkap']; ?></td>
                                            <td><?php echo $t['nomor_telepon']; ?></td>
                                            <td><?php echo $t['jenis_kelamin']; ?></td>
                                            <td><?php echo $t['status']; ?></td>
                                            <td><?php echo $t['email']; ?></td>
                                            <td><?php echo $t['pekerjaan']; ?></td>
                                            <td>
                                              <p><a class="btn btn-primary" href="<?php echo site_url('/a_transaksi/'.$t['id_transaksi']); ?>"><span class="fa fa-eye" ></span></a></p>
                                              <p><a class="btn btn-info" href="<?php echo site_url('/a_transaksi/edit/'.$t['id_transaksi']); ?>"><span class="fa fa-pencil" ></span></a></p>
                                              <p><a class="btn btn-danger" href="<?php echo site_url('/a_transaksi/'.$t['id_transaksi']); ?>"><span class="fa fa-trash" ></span></a></p>
                                            </td>
                                          </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
