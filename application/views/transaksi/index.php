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
                                            <th>Nama</th>
                                            <th>Nomor Telepon</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = "1";
                                        foreach ($transaksi as $t) : ?>
                                          <tr>
                                            <td><?php echo $num++ ?></td>
                                            <td><a href="<?php echo site_url('/a_transaksi/'.$t['id_transaksi']); ?>"><?php echo $t['nama_lengkap']; ?></a></td>
                                            <td><?php echo $t['nomor_telepon']; ?></td>
                                            <td><?php echo $t['jenis_kelamin']; ?></td>
                                            <td><?php echo $t['email']; ?></td>
                                            <td style="width:23%; margin-top: -10%;">
                                              <center>
                                              <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_transaksi/edit/'.$t['id_transaksi']); ?>"><span class="fa fa-pencil"></span></a>
                                              <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_transaksi/delete/'.$t['id_transaksi']); ?>"><span class="fa fa-trash" ></span></a>
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
