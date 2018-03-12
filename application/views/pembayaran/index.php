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
                                            <td style="width:20%;">
                                              <center>
                                            <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_pembayaran/edit/'.$p['id_pembayaran']); ?>"><span class="fa fa-pencil" ></span></a>
                                            <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_pembayaran/delete/'.$p['id_pembayaran']); ?>"><span class="fa fa-trash" ></span></a>
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
