<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Otoads</title>

        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/kustom.css">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>

        <!-- APP WRAPPER -->
        <div class="app">

            <!-- START APP CONTAINER -->
            <div class="app-container">
                <!-- START SIDEBAR -->
                <div class="app-sidebar app-navigation  app-navigation-fixed app-navigation-style-default dir-left" data-type="close-other">
                    <a href="index.html" class="app-navigation-logo"></a>
                    <nav>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>"><span class="icon-home text-maroon-100"></span>Home</a></li>
                            <li><a href="<?php echo base_url(); ?>a_transaksi"><span class="fa fa-money text-lime-100"></span>Data Transaksi</a></li>
                            <li><a href="<?php echo base_url(); ?>a_pembayaran"><span class="fa fa-usd text-yellow-100"></span>Data Pembayaran</a></li>
                            <li><a href="<?php echo base_url(); ?>a_distance"><span class="fa fa-blind text-teal-100"></span>Data Distance</a></li>
                            <li><a href="<?php echo base_url(); ?>a_check"><span class="fa fa-check-square text-green-100"></span>Data Check In</a></li>
                            <li>
                                <a href="#"><span class="fa fa-adn text-blue-100"></span>Iklan</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>a_master_iklan"><span class="nav-icon-hexa">Mi</span> Master Iklan</a></li>
                                    <li><a href="<?php echo base_url(); ?>a_iklan"><span class="nav-icon-hexa">Di</span> Data Iklan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-car text-orange-100"></span>Kendaraan</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>a_mobil"><span class="nav-icon-hexa">DK</span> Data Kendaraan</a></li>
                                    <li><a href="<?php echo base_url(); ?>a_tipe"><span class="nav-icon-hexa">DTK</span> Data Tipe Kendaraan</a></li>
                                    <li><a href="<?php echo base_url(); ?>a_tahun"><span class="nav-icon-hexa">DTH</span> Data Tahun Kendaraan</a></li>
                                    <li><a href="<?php echo base_url(); ?>a_warna"><span class="nav-icon-hexa">DWk</span> Data Warna Kendaraan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-street-view text-pink-100"></span>Wilayah</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>a_kota"><span class="nav-icon-hexa">DK</span> Data Kota</a></li>
                                    <li><a href="<?php echo base_url(); ?>a_wilayah"><span class="nav-icon-hexa">DW</span> Data Wilayah</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>users/view_users"><span class="fa fa-user text-indigo-100"></span>Users</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- END SIDEBAR -->

                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <div class="app-header">
                        <ul class="app-header-buttons">
                            <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                            <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-list"></span></a></li>
                        </ul>
                        <form class="app-header-search" action="" method="post">
                            <input type="text" name="keyword" placeholder="Search">
                        </form>
                    </div>
                    <!-- END APP HEADER  -->

                    <!-- START PAGE HEADING -->
                    <!-- <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="icon-home"></span>
                        </div>
                        <div class="title">
                            <h1>Blank</h1>
                            <p>Subtitle</p>
                        </div>
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">First level</a></li>
                            <li class="active">Current</li>
                        </ul>
                    </div> -->
                    <!-- END PAGE HEADING -->
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
                    <?php if ($this->session->flashdata('delete_wilayah')): ?>
                      <?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-menu-circle"></span>
                                        </div>
                                        '.$this->session->flashdata('delete_wilayah').'
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
