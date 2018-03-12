                </div>
                <!-- END APP CONTENT -->

            </div>
            <!-- END APP CONTAINER -->

        </div>
        <!-- END APP WRAPPER -->
        <!-- START SCRIPTS -->
          <!-- <script type="text/javascript">
            $(document).ready(function(){
                $('#kota').change(function(){
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo base_url();?>a_transaksi/get_kota",
                        method : "POST",
                        data : {id: id},
                        async : false,
                        dataType : 'json',
                        success: function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                html += '<option>'+data[i].nama_wilayah+'</option>';
                            }
                            $('.wilayah').html(html);
                        }
                    });
                });
            });
  </script> -->
        <script>
          $(document).ready(function(){
            $('#kota').on('change', function){
              alert('Work.....')
            });
          });
        </script>
  <!-- Fungsi javascript untuk onchange -->
        <!-- <script>
          function kot(){
            var dko =$("#kota").val();
              $.ajax({
                type :"POST",
                dataType:"html",
                url:"<?php echo base_url();?>a_transaksi/get_nama_kota",
                data:"id="+dko,
                success: function (msg) {
                  $("#nm_wilayah").val(msg);
                }
              });
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
        </script> -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/moment/moment.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/select2/select2.full.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/maskedinput/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/form-validator/jquery.form-validator.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/noty/jquery.noty.packaged.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/datatables/dataTables.bootstrap.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/sweetalert/sweetalert.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/knob/jquery.knob.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/jvectormap/jquery-jvectormap-us-aea-en.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/morris/raphael.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/morris/morris.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/dropzone/dropzone.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/nestable/jquery.nestable.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/cropper/cropper.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/tableexport/tableExport.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/tableexport/jquery.base64.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/tableexport/html2canvas.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/tableexport/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/tableexport/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/tableexport/jspdf/libs/base64.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-daterange/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-tour/bootstrap-tour.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/fullcalendar/fullcalendar.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/smartwizard/jquery.smartWizard.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app_plugins.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app_demo.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>
