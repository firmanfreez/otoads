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
                                            <th>Nama Iklan</th>
                                            <th>Pemakai Iklan</th>
                                            <th>Wilayah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = "1";
                                        foreach ($iklan as $i) : ?>
                                          <tr>
                                            <td><?php echo $num++ ?></td>
                                            <td><?php echo $i['nama_iklan']; ?></td>
                                            <td><?php echo $i['nama_lengkap']; ?></td>
                                            <td><?php echo $i['nama_kota']; ?>,&nbsp<?php echo $i['nama_wilayah']; ?></td>
                                            <td>
                                              <center><p><a class="btn btn-primary" href="<?php echo site_url('/a_iklan/'.$i['id_iklan']); ?>"><span class="fa fa-eye" ></span></a></p></center>
                                              <center><p><a class="btn btn-info" href="<?php echo site_url('/a_iklan/'.$i['id_iklan']); ?>"><span class="fa fa-pencil" ></span></a></p></center>
                                              <center><p><a class="btn btn-danger" href="<?php echo site_url('/a_iklan/'.$i['id_iklan']); ?>"><span class="fa fa-trash" ></span></a></p></center>
                                            </td>
                                          </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
