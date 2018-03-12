<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed block-info">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                              <a href="<?php base_url(); ?>../a_iklan"><button class="btn btn-info">Kembali</button></a>
                                <center><h1 style="text-transform: uppercase">DETAIL IKLAN <?= $title ?></h1></center>
                            </div>
                            <div class="block-content">
                              <div class="col-md-12">
                                <div class="panel panel-info">
                                      <div class="panel-heading">
                                          <h3 class="panel-title"><span class="icon-tablet"></span>Data Iklan</h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Nama Iklan</label>
                                              <input readonly class="form-control" value="<?php echo $iklan['nama_iklan']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Harga Iklan</label>
                                              <input readonly class="form-control" value="<?php echo $iklan['harga_iklan']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Durasi Iklan</label>
                                              <input readonly class="form-control" value="<?php echo $iklan['durasi_iklan']; ?>"/>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Area Stiker</label>
                                              <input readonly class="form-control" value="<?php echo $iklan['area_stiker']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Wilayah</label>
                                              <input readonly class="form-control" value="<?php echo $iklan['nama_kota']; ?>, <?php echo $iklan['nama_wilayah']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                              <label>Gambar Iklan</label><br>
                                                <img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/data_iklan/<?php echo $iklan['iklan_gambar']; ?>">
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="panel panel-info">
                                          <div class="panel-heading">
                                              <h3 class="panel-title"><span class="icon-tablet"></span>Daftar Driver Yang Mengambil Iklan</h3>
                                          </div>
                                          <div class="panel-body">
                                              <div class="col-md-12">
                                                <table class="table table-striped table-bordered datatable-extended">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Driver</th>
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
                                                            <td><a href="<?php echo site_url('/a_transaksi/'.$mi['id_transaksi']); ?>"><?php echo $mi['nama_lengkap']; ?></a></td>
                                                            <td><?php echo $mi['nomor_telepon']; ?></td>
                                                            <td><?php echo $mi['email']; ?></td>
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
                                        </div>
                                        <div class="col-md-12">
                                          <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><span class="icon-car"></span>Data Kendaraan Iklan</h3>
                                                </div>
                                                <div class="panel-body">
                                                  <div class="col-md-12">
                                                  <table class="table table-striped table-bordered datatable-extended">
                                                      <thead>
                                                          <tr>
                                                              <th>No</th>
                                                              <th>Merk Motor</th>
                                                              <th>Tipe Motor</th>
                                                              <th>Tahun Motor</th>
                                                              <th>Warna Motor</th>
                                                              <th>Aksi</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php
                                                          $num = "1";
                                                          foreach ($iklan_k as $ik) : ?>
                                                            <tr>
                                                              <td><?php echo $num++ ?></td>
                                                              <td><?php echo $ik['merk']; ?></td>
                                                              <td><?php echo $ik['tipe']; ?></td>
                                                              <td><?php echo $ik['tahun']; ?></td>
                                                              <td><?php echo $ik['warna']; ?></td>
                                                              <td style="width: 23%;">
                                                                <center>
                                                                <!-- <a class="btn btn-info btn-xs" href="<?php echo site_url('/a_master_iklan/edit/'.$ik['id_iklan_kendaraan']); ?>"><span class="fa fa-pencil" ></span></a> -->
                                                                <a class="btn btn-danger btn-xs" href="<?php echo site_url('/a_iklan/delete_kendaraan/'.$ik['id_iklan_kendaraan']); ?>"><span class="fa fa-trash" ></span></a>
                                                              </center>
                                                              </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                      </tbody>
                                                  </table>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
