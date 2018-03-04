<!-- START PAGE CONTAINER -->
                    <div class="container">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                    <center><h1 style="text-transform: uppercase;"><?= $title; ?></h1></center>
                            </div>
                            <!-- END HEADING -->
                            <div class="block-content">
                              <?php echo form_open_multipart('a_transaksi/tambah'); ?>
                              <div class="form-horizontal">
                                <div class="form-group">
                                      <label class="col-md-2 control-label">Reflect Code</label>
                                      <div class="col-md-10">
                                          <input type="text" name="reflect_code" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="col-md-2 control-label">Nama Lengkap</label>
                                        <div class="col-md-10">
                                            <input type="text" name="nama_lengkap" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-4">
                                        <label>Jenis Kelamin</label>
                                          <div class="app-radio">
                                          <label><input type="radio" name="jenis_kelamin" value="wanita">Pria</label>
                                        </div>
                                        <div class="app-radio">
                                      <label><input type="radio" name="jenis_kelamin" value="wanita">Wanita</label>
                                    </div>
                                      </div>
                                      <div class="col-md-4">
                                        <label>Status</label>
                                        <div class="app-radio">
                                          <label><input type="radio" name="status" value="menikah">Menikah</label>
                                        </div>
                                        <div class="app-radio">
                                          <label><input type="radio" name="jenis_kelamin" value="belum menikah">Belum Menikah</label>
                                      </div>
                                      </div>
                                  </div>
                                <div class="form-group">
                                        <label class="col-md-2 control-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Password</label>
                                              <div class="col-md-10">
                                                  <input type="password" name="password" class="form-control">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                                <label class="col-md-2 control-label">Nomor Telepon</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="nomor_telepon" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                  <label class="col-md-2 control-label">Pekerjaan</label>
                                                  <div class="col-md-10">
                                                      <input type="text" name="pekerjaan" class="form-control">
                                                  </div>
                                              </div>
                                            <hr style="width: 50%; min-width: 100px; border: solid 1px grey; margin-left: 27%;">
                                            <div class="form-group">
                                                  <label class="col-md-2 control-label">Nama Pemilik Kendaraan</label>
                                                  <div class="col-md-10">
                                                      <input type="text" name="nama_pemilik_kendaraan" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                    <label class="col-md-2 control-label">Nomor Polisi Kendaraan</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="nomor_polisi_kendaraan" class="form-control">
                                                    </div>
                                                </div>
                                    <div class="form-group">
                                          <label class="col-md-2 control-label">Merk Motor</label>
                                            <select class="bs-select col-md-10">
                                              <?php foreach ($kendaraan as $k) : ?>
                                                <option value="<?php echo $k['id_merk']; ?>"><?php echo $k['merk']; ?></option>
                                              <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Tipe Motor</label>
                                                <select class="bs-select col-md-10">
                                                  <option></option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                  <label class="col-md-2 control-label">Tahun Motor</label>
                                                    <select class="bs-select col-md-10">
                                                      <option></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                      <label class="col-md-2 control-label">Warna Motor</label>
                                                        <select class="bs-select col-md-10">
                                                          <option></option>
                                                        </select>
                                                    </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label">STNK</label>
                                                  <div class="col-md-10">
                                                      <input type="file" name="stnk_gambar">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                              <label class="col-md-2 control-label">SIM</label>
                                              <div class="col-md-10">
                                                  <input type="file" name="sim_gambar">
                                              </div>
                                          </div>
                                          <hr style="width: 50%; min-width: 100px; border: solid 1px grey; margin-left: 27%;">
                                          <div class="form-group">
                                                <label class="col-md-2 control-label">Kota</label>
                                                  <select class="bs-select col-md-10" name="kota" onchange="kot()" id="kota">
                                                    <option>Pilih Kota</option>
                                                    <?php foreach ($wilayah as $w) : ?>
                                                      <option value="<?php echo $w['id_kota']; ?>"><?php echo $w['nama_kota']; ?></option>
                                                    <?php endforeach; ?>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                    <label class="col-md-2 control-label">Wilayah</label>
                                                      <select class="bs-select col-md-10 wilayah" name="id_wilayah" id="wilayah">
                                                        <option>Pilih Wilayah</option>
                                                        <?php foreach ($kota as $key => $k): ?>
                                                          <option value="<?php echo $k['id_wilayah']; ?>"><?php echo $k['nama_wilayah']; ?></option>
                                                        <?php endforeach; ?>
                                                      </select>
                                                  </div>
                                      <center><button type="button" class="btn btn-success">SUBMIT</button></center>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
<!-- END PAGE CONTAINER -->
<!-- <script>
  function kot(){
    var kt = document.getElementById("kota").value;
    document.getElementById("wilayah").innerHTML = "Select: " + kt;
  }
</script> -->
<script>
  function kot(){
    var dko =$("#kota").val();
      $.ajax({
        type :"POST",
        dataType:"html",
        url:"<?php echo base_url();?>a_transaksi/get_kota",
        data:"id="+dko,
        success: function (msg) {
          $("#wilayah").val(msg);
        }
      });
    }
</script>
