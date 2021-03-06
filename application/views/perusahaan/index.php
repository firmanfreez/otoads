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
                                                              <th>Pengiklan</th>
                                                              <th>Alamat Pengiklan</th>
                                                              <th>Email Pengiklan</th>
                                                              <th>Telepon Pengiklan</th>
                                                              <th>Nama Perusahaan</th>
                                                              <th>Aksi</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php
                                                          $num = "1";
                                                          foreach ($pengiklan as $p) : ?>
                                                            <tr>
                                                              <td><?php echo $num++ ?></td>
                                                              <td><a href="<?php echo site_url('/a_perusahaan/'.$p['id_perusahaan']); ?>"><?php echo $p['pic']; ?></a></td>
                                                              <td><?php echo $p['alamat_pic'] ?></td>
                                                              <td><?php echo $p['email_pic'] ?></td>
                                                              <td><?php echo $p['telepon_pic'] ?></td>
                                                              <td><?php echo $p['nama_perusahaan'] ?></td>
                                                              <td style="width:23%;">
                                                                <center>
                                                                <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_perusahaan/edit/'.$p['id_perusahaan']); ?>"><span class="fa fa-pencil" ></span></a>
                                                                <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_perusahaan/'.$p['id_perusahaan']); ?>"><span class="fa fa-trash" ></span></a>
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
