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
                                                              <th>Nama Iklan</th>
                                                              <th>Durasi Iklan</th>
                                                              <th>Status</th>
                                                              <th>Aksi</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php
                                                          $num = "1";
                                                          foreach ($m_iklan as $mi) : ?>
                                                            <tr>
                                                              <td><?php echo $num++ ?></td>
                                                              <td><a href="<?php echo site_url('/a_master_iklan/'.$mi['id_master_iklan']); ?>"><?php echo $mi['nama_iklan']; ?></a></td>
                                                              <td><?php echo $mi['durasi_iklan']; ?></td>
                                                              <td><?php echo $mi['status']; ?></td>
                                                              <td style="width: 23%;">
                                                                <center>
                                                                <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_master_iklan/edit/'.$mi['id_master_iklan']); ?>"><span class="fa fa-pencil" ></span></a>
                                                                <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_master_iklan/'.$mi['id_master_iklan']); ?>"><span class="fa fa-trash" ></span></a>
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
