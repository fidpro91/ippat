<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css"> -->
  <!-- daterange picker -->
  <!-- <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/daterangepicker/daterangepicker.css"> -->
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style type="text/css">
  .responsive {
  width: 100%;
  height: auto;
}
</style>
<body class="hold-transition register-page">
<div class="register-box" style="width: 50% !important">
  <div class="register-logo">
    <a href="<?=base_url()?>assets/index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body">
      <table width="100%">
        <tr>
          <td width="10%" class="text-center">
            <img src="<?=base_url('assets/images/logo1.jpeg')?>" class="responsive"><img src="">
          </td>
          <td class="text-center" width="70%">
            <h5>FORM DATA ANGGOTA
PENGURUS WILAYAH JAWA TIMUR IKATAN NOTARIS INDONESIA(INI)
DAN
PEJABAT PEMBUAT AKTA TANAH(IPPAT)</h5>
          </td>
          <td width="10%" class="text-center">
            <img src="<?=base_url('assets/images/logo2.jpeg')?>" class="responsive"><img src="">
          </td>
        </tr>
      </table>
      <hr style="border-top: 3px double #8c8b8b !important;">
    </div>
    <div class="card-body">
      <?php
          if ($this->session->flashdata('message')) {
              echo '<div class="alert alert-danger">
                      <button class="close" data-close="alert"></button>
                      <span>
                         '.$this->session->flashdata('message').'
                      </span>
                    </div>';
          }
      ?>
      <form class="form-horizontal" method="post"  enctype="multipart/form-data" action="<?=base_url('register/save')?>">
          <div class="row">
            <div class="col-md-6">
                <input type="hidden" class="form-control" name="bio_id" id="bio_id">
                <div class="form-group">
                <label for="nama_lengkap">nama lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                </div>
                <div class="form-group">
                <label for="alamat_kantor">alamat kantor</label>
                <textarea class="form-control" rows="2" name="alamat_kantor" id="alamat_kantor"></textarea>
                </div>
                <div class="form-group" id="groupEmail">
                <label for="email">email</label>
                <div class="input-group">
                      <input type="text" class="form-control mail" name="email[]" id="email">
                      <button class="btn btn-primary" id="addEmail"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="form-group">
                <label for="telp_kantor">telp kantor</label>
                <input type="text" class="form-control" name="telp_kantor" id="telp_kantor">
                </div>
            </div>
            <div class="col-md-6">
                  <div class="form-group">
                  <label for="no_hp">no hp</label>
                  <input type="text" class="form-control" name="no_hp" id="no_hp">
                  </div>
                  <div class="form-group">
                  <label for="tempat_lahir">tempat lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                  </div>
                  <div class="form-group">
                  <label for="tanggal_lahir">tanggal lahir</label>
                  <div class="input-group date" id="tanggalLahir" data-target-input="nearest">
                      <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control datetimepicker-input" data-target="#tanggalLahir"/>
                      <div class="input-group-append" data-target="#tanggalLahir" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
                  </div>
                  <div class="form-group">
                      <label for="jabatan">Jabatan</label>
                      <select name="jabatan" id="jabatan" class="form-control" required="true">
                          <option value="">Pilih</option>
                          <option>NOTARIS</option>
                          <option>PPAT</option>
                          <option>NOTARIS & PPAT</option>
                      </select>
                  </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12" id="notaris" style="display: none;">
                  <div class="card card-outline card-success">
                    <div class="card-header">
                      <h3 class="card-title">Upload Berkas Notaris</h3>
                      <div class="card-tools">
                        <label>Pengda :</label>
                        <select name="pengda_notaris" id="pengda_notaris" class="form-control">
                          <option value="">Pilih</option>
                            <?php
                              foreach ($pengdaNotaris as $key => $value) {
                                  echo("<option>$value->pengda</option>");
                              }
                            ?>
                        </select>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="tgl_sk">tgl sk</label>
                                <div class="input-group date" id="tanggalSKnotaris" data-target-input="nearest">
                                    <input type="text" name="tgl_sk_notaris" id="tgl_sk_notaris" class="form-control datetimepicker-input" data-target="#tanggalSKnotaris"/>
                                    <div class="input-group-append" data-target="#tanggalSKnotaris" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="tanggal_ba">tanggal ba</label>
                                <div class="input-group date" id="tanggalBaNotaris" data-target-input="nearest">
                                    <input type="text" name="tanggal_ba_notaris" id="tanggal_ba_notaris" class="form-control datetimepicker-input" data-target="#tanggalBaNotaris"/>
                                    <div class="input-group-append" data-target="#tanggalBaNotaris" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="no_sk">no sk</label>
                                <input type="text" class="form-control" name="no_sk_notaris" id="no_sk_notaris">
                                </div>
                                <div class="form-group">
                                <label for="no_ba">no ba</label>
                                <input type="text" class="form-control" name="no_ba_notaris" id="no_ba_notaris">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="upload_sk">upload sk</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="upload_sk_notaris" id="upload_sk_notaris">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="upload_ba">upload ba</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="upload_ba_notaris" id="upload_ba_notaris">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                            <label for="pemegang_protokolnotaris">pemegang protokolnotaris</label>
                            <input type="text" class="form-control" name="pemegang_protokolnotaris" id="pemegang_protokolnotaris">
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div>
              <div class="col-md-12" id="ippat"  style="display: none;">
                  <div class="card card-outline card-success">
                    <div class="card-header">
                      <h3 class="card-title">Upload Berkas IPPAT</h3>
                      <div class="card-tools">
                        <label>Pengda :</label>
                        <select name="pengda_ippat" id="pengda_ippat" class="form-control">
                          <option value="">Pilih</option>
                            <?php
                              foreach ($pengdaIppat as $key => $value) {
                                  echo("<option>$value->pengda</option>");
                              }
                            ?>
                        </select>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="tgl_sk">tgl sk</label>
                                <div class="input-group date" id="tanggalSKIppat" data-target-input="nearest">
                                    <input type="text" name="tgl_sk_ippat" id="tgl_sk_ippat" class="form-control datetimepicker-input" data-target="#tanggalSKIppat"/>
                                    <div class="input-group-append" data-target="#tanggalSKIppat" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="tanggal_ba">tanggal ba</label>
                                <div class="input-group date" id="tanggalBaIppat" data-target-input="nearest">
                                    <input type="text" name="tanggal_ba_ippat" id="tanggal_ba_ippat" class="form-control datetimepicker-input" data-target="#tanggalBaIppat"/>
                                    <div class="input-group-append" data-target="#tanggalBaIppat" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="no_sk">no sk</label>
                                <input type="text" class="form-control" name="no_sk_ippat" id="no_sk_ippat">
                                </div>
                                <div class="form-group">
                                <label for="no_ba">no ba</label>
                                <input type="text" class="form-control" name="no_ba_ippat" id="no_ba_ippat">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="upload_sk">upload sk</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="upload_sk_ippat" id="upload_sk_ippat">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="upload_ba">upload ba</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="upload_ba_ippat" id="upload_ba_ippat">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                              <label for="pemegang_protokolnotaris">pemegang protokolPPAT</label>
                              <input type="text" class="form-control" name="pemegang_protokolppat" id="pemegang_protokolppat">
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div>
          </div>
          <div class="social-auth-links text-center">
              <button href="#" name="btnsave" class="btn btn-block btn-primary" value="1" onclick="$('.form-horizontal').submit()">
                Simpan Data Ini
              </button>
          </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- date-range-picker -->
  <script src="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?=base_url()?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- PAGE PLUGINS -->
  <script type="text/javascript">
    $(function () {
    bsCustomFileInput.init();
    //Date range picker
    $('#tanggalLahir, #tanggalBaNotaris, #tanggalSKIppat, #tanggalBaIppat, #tanggalSKnotaris').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $("#jabatan").change(function(){
        $("#ippat").find('input, select').val('');
        $("#notaris").find('input, select').val('');
        $("#pengda_notaris, #pengda_ippat").attr('required',false);
        if ($(this).val() == 'NOTARIS') {
          $("#notaris").show();
          $("#pengda_notaris").attr('required',true);
          $("#ippat").hide();
        }else if($(this).val() == 'PPAT') {
          $("#notaris").hide();
          $("#ippat").show();
          $("#pengda_ippat").attr('required',true);
        }else if($(this).val() == 'NOTARIS & PPAT') {
          $("#notaris").show();
          $("#ippat").show();
          $("#pengda_notaris").attr('required',true);
          $("#pengda_ippat").attr('required',true);
        }else{
          $("#notaris").hide();
          $("#ippat").hide();
        }
    });
  });
    function removeEmail(a){
      $(a).closest('div').remove();
      $("#addEmail").attr('disabled',false);
    }
  $("#addEmail").click(function(){
      if ($(".mail").length <= 2) {
          $("#groupEmail").append('<div class="input-group"><input type="text" class="form-control mail" name="email[]"><button class="btn btn-danger rmEmail" onclick="removeEmail(this)"><i class="fa fa-minus"></i></button></div>'); 
      }else{
        $("#addEmail").attr('disabled',true);
      }
    });
    
  </script>
</body>
</html>
