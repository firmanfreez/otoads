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
                                            <th>Tipe Kendaraan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = "1";
                                        foreach ($tipe as $t) : ?>
                                          <tr>
                                            <td><?php echo $num++ ?></td>
                                            <td><?php echo $t['tipe']; ?></td>
                                            <td>
                                              <center><p><a class="btn btn-info btn-xs" href="<?php echo site_url('/a_tipe/edit/'.$t['id_tipe']); ?>"><span class="fa fa-pencil" ></span></a></p></center>
                                            </td>
                                          </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
