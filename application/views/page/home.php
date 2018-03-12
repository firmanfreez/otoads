<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed block-info">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1><?= $title ?></h1></center>
                            </div>
                                    <div class="col-md-6">
                                        <div class="app-widget-tile app-widget-tile-primary">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="icon icon-lg">
                                                        <span class="fa fa-users"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="line">
                                                        <div class="title">Jumlah Driver</div>
                                                    </div>
                                                    <div class="intval text-left"><?php
                                                    $query = $this->db->query('SELECT * FROM data_transaksi');
                                                    $row = $query->num_rows('id_transaksi');
                                                    echo $row;
                                                     ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="app-widget-tile app-widget-tile-default" style="background-color: #E0E0E0;">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="icon icon-lg">
                                                        <span class="fa fa-user-secret"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="line">
                                                        <div class="title">Jumlah Pengiklan</div>
                                                    </div>
                                                    <div class="intval text-left"><?php
                                                    $query = $this->db->query('SELECT * FROM data_perusahaan');
                                                    $row = $query->num_rows('id_perusahaan');
                                                    echo $row;
                                                     ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="app-widget-tile app-widget-tile-info">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="icon icon-lg">
                                                        <span class="fa fa-arrow-down"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="line">
                                                        <div class="title">Jumlah Iklan</div>
                                                    </div>
                                                    <div class="intval text-left"><?php
                                                    $query = $this->db->query('SELECT * FROM data_iklan');
                                                    $row = $query->num_rows('id_iklan');
                                                    echo $row;
                                                     ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="app-widget-tile app-widget-tile-success">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="icon icon-lg">
                                                        <span class="fa fa-arrow-up"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="line">
                                                        <div class="title">Iklan Yang Diambil</div>
                                                    </div>
                                                    <div class="intval text-left"><?php
                                                    $query = $this->db->query('SELECT * FROM master_iklan');
                                                    $row = $query->num_rows('id_master_iklan');
                                                    echo $row;
                                                     ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="app-widget-tile app-widget-tile-warning">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="icon icon-lg">
                                                        <span class="fa fa-adn"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="line">
                                                        <div class="title">Iklan Yang Aktif</div>
                                                    </div>
                                                    <div class="intval text-left"><?php
                                                    $query = $this->db->query("SELECT * FROM data_iklan WHERE status='aktif'");
                                                    $row = $query->num_rows();
                                                    echo $row;
                                                     ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="app-widget-tile app-widget-tile-danger">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="icon icon-lg">
                                                        <span class="fa fa-adn"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="line">
                                                        <div class="title">Iklan Yang Tidak Aktif</div>
                                                    </div>
                                                    <div class="intval text-left"><?php
                                                    $query = $this->db->query("SELECT * FROM data_iklan WHERE status='tidak aktif'");
                                                    $row = $query->num_rows();
                                                    echo $row;
                                                     ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!-- END PAGE CONTAINER -->
