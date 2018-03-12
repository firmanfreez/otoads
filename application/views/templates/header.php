<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Otoads</title>

        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon.png" >
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/kustom.css">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
      <div class="app">
            <!-- START APP HEADER -->
            <div class="app-header">
                <ul class="app-header-buttons visible-mobile">
                    <li><a href="#" class="btn btn-link btn-icon" data-header-navigation-toggle="true"><span class="icon-menu"></span></a></li>
                </ul>
                <a href="index.html" class="app-header-logo app-header-logo-light app-header-logo-condensed">Project</a>
                <div class="app-header-navigation" >
                    <nav>
                        <ul>
                            <li>
                              <a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>a_transaksi">Driver</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>a_iklan">Iklan</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>a_perusahaan">Pengiklan</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>a_pembayaran"> Pembayaran</a>
                            </li>
                            <li>
                              <a> Data</a>
                              <div class="app-header-navigation-megamenu">
                              <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="list-group list-group-condensed">
                                                <div class="list-group-title">Kendaraan</div>
                                                <a href="<?php echo base_url(); ?>a_mobil" class="list-group-item">Data Kendaraan</a>
                                                <a href="<?php echo base_url(); ?>a_tipe" class="list-group-item">Data Tipe Kendaraan</a>
                                                <a href="<?php echo base_url(); ?>a_tahun" class="list-group-item">Data Tahun Kendaraan</a>
                                                <a href="<?php echo base_url(); ?>a_warna" class="list-group-item">Data Warna Kendaraan</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="list-group list-group-condensed">
                                                <div class="list-group-title">Wilayah</div>
                                                <a href="<?php echo base_url(); ?>a_kota" class="list-group-item">Data Kota</a>
                                                <a href="<?php echo base_url(); ?>a_wilayah" class="list-group-item">Data Wilayah</a>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                            </li>
                            <li style="left: 115%;">
                              <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
                            </li>
                        </ul>
                    </nav>
            </div>
          </div>
            <!-- END APP HEADER  -->
            <!-- START APP CONTAINER -->
            <div class="app-container">
                    <!-- END APP HEADER  -->
                    <?php if ($this->session->flashdata('delete_pembayaran')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_pembayaran').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_pembayaran')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_pembayaran').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('delete_distance')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_distance').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_distance')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_distance').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('delete_check')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_check').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_check')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_check').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('delete_mobil')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_mobil').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_mobil')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_mobil').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_wilayah')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_wilayah').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('delete_iklan')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_iklan').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_iklan')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_iklan').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('delete_kota')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_kota').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_kota')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_kota').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('delete_kota')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_kota').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_kota')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_kota').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('delete_master_iklan')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_master_iklan').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_master_iklan')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_master_iklan').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('delete_perusahaan')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_perusahaan').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_perusahaan')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_perusahaan').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('delete_transaksi')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_transaksi').'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_transaksi')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_transaksi').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_tahun')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_tahun').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_tipe')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_tipe').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('update_warna')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('update_warna').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('user_loggedin')): ?>
                      <?php echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                          <div class="alert-icon">
                                              <span class="icon-checkmark-circle"></span>
                                          </div>
                                          '.$this->session->flashdata('user_loggedin').'
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                      </div>' ?>
                    <?php endif; ?>
