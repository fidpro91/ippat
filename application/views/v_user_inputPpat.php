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
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box" style="width: 80% !important">
  <div class="register-logo">
    <a href="<?=base_url()?>assets/index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body ">
      <p class="login-box-msg">Register Anggota PPAT</p>
      <form class="form-horizontal" method="post"  enctype="multipart/form-data" action="<?=base_url('register/saveppat')?>">
          <div class="row">
            <div class="col-md-4">
                <input type="hidden" class="form-control" name="bio_id" id="bio_id">
                <div class="form-group">
                <label for="nama_lengkap">nama lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                </div>
                <div class="form-group">
                <label for="pengda">pengda</label>
                <select name="pengda" id="pengda" class="form-control">
                    <?php
                      foreach ($pengda as $key => $value) {
                          echo("<option>$value->pengda</option>");
                      }
                    ?>
                </select>
                </div>
                <div class="form-group">
                <label for="alamat_kantor">alamat kantor</label>
                <textarea class="form-control" rows="3" name="alamat_kantor" id="alamat_kantor"></textarea>
                </div>
                <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label for="tgl_sk">tgl sk</label>
                <div class="input-group date" id="tanggalSK" data-target-input="nearest">
                    <input type="text" name="tgl_sk" id="tgl_sk" class="form-control datetimepicker-input" data-target="#tanggalSK"/>
                    <div class="input-group-append" data-target="#tanggalSK" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label for="no_sk">no sk</label>
                <input type="text" class="form-control" name="no_sk" id="no_sk">
                </div>
                <div class="form-group">
                <label for="upload_sk">upload sk</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="upload_sk" id="upload_sk">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
                </div>
                <div class="form-group">
                <label for="tanggal_ba">tanggal ba</label>
                <div class="input-group date" id="tanggalBa" data-target-input="nearest">
                    <input type="text" name="tanggal_ba" id="tanggal_ba" class="form-control datetimepicker-input" data-target="#tanggalBa"/>
                    <div class="input-group-append" data-target="#tanggalBa" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label for="no_ba">no ba</label>
                <input type="text" class="form-control" name="no_ba" id="no_ba">
                </div>
                <div class="form-group">
                <label for="upload_ba">upload ba</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="upload_ba" id="upload_ba">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="form-group">
                  <label for="telp_kantor">telp kantor</label>
                  <input type="text" class="form-control" name="telp_kantor" id="telp_kantor">
                  </div>
                  <div class="form-group">
                  <label for="no_hp">no hp</label>
                  <input type="text" class="form-control" name="no_hp" id="no_hp">
                  </div>
                  <div class="form-group">
                  <label for="pemegang_protokolnotaris">pemegang protokolnotaris</label>
                  <input type="text" class="form-control" name="pemegang_protokolnotaris" id="pemegang_protokolnotaris">
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
            </div>
          </div>
      </form>
      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary" onclick="$('.form-horizontal').submit()">
          Simpan Data
        </a>
      </div>
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
    $.get("find_data/<?=$id?>",function(data){
          $.each(data,function(ind,obj){
            if (ind != 'upload_sk' && ind != 'upload_ba' && ind != 'no_sk' && ind != 'no_ba' && ind != 'tgl_sk' && ind != 'tanggal_ba' && ind != 'pengda') {
              $("#"+ind).val(obj);
              $("#"+ind).attr('readonly',true);
            }
          });
    },'json');
    $('#tanggalLahir, #tanggalBa, #tanggalSK').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  });
  </script>
</body>
</html>
