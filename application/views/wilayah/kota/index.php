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
                                            <th>Nama Kota</th>
                                            <th>Nama Wilayah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = "1";
                                        foreach ($kota as $k) : ?>
                                          <tr>
                                            <td><?php echo $num++ ?></td>
                                            <td><?php echo $k['nama_kota']; ?></td>
                                            <td><?php echo $k['nama_wilayah']; ?></td>
                                            <td style="width: 20%;">
                                              <center>
                                              <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_kota/edit/'.$k['id_kota']); ?>"><span class="fa fa-pencil" ></span></a>
                                              <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_kota/delete/'.$k['id_kota']); ?>"><span class="fa fa-trash" ></span></a>
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
