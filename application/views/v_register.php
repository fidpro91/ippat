<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>frontend/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?=base_url()?>frontend/img/logo-ini-ippat.png" />
	<title>FORM DATA ANGGOTA IPPAT | Pendaftaran</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>
	<!-- CSS Files -->
    <link href="<?=base_url()?>frontend/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>frontend/css/paper-bootstrap-wizard.css" rel="stylesheet" />
	 <!-- <link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css"> -->
	 <!-- <link rel="stylesheet" href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?=base_url()?>frontend/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="<?=base_url()?>frontend/css/themify-icons.css" rel="stylesheet">
	<link href="<?=base_url()?>frontend/datepicker.css" rel="stylesheet">
	<style type="text/css">
		.btn-sm {
			color: white;border: none;
		}

		.btn-blue {
			background-color: #008CBA;
		}
		.btn-red {
			background-color: red;
		}
		./*datetimepicker,
.table-condensed {
  width: 500px;
  height:500px;
}*/
	</style>
	</head>

	<body>
	<div class="image-container set-full-height" style="background-image: url('<?=base_url()?>frontend/img/paper-1.jpeg')">
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                    <form method="post"  enctype="multipart/form-data" action="<?=base_url('register/save')?>">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<table width="100%">
								        <tr>
								          <td width="10%" class="text-center">
								            <img src="<?=base_url('assets/images/logo1.png')?>" class="logo" style="width: 100%">
								          </td>
								          <td class="text-center" width="70%">
								            <h5 style="font-size:1.5vw !important;">FORM DATA NOTARIS DAN PPAT JAWA TIMUR</h5>
								          </td>
								          <td width="10%" class="text-center">
								            <img src="<?=base_url('assets/images/logo2.jpeg')?>" class="logo" style="width: 100%">
								          </td>
								        </tr>
								      </table>
									<!-- <p class="category">This information will let us know more about you.</p> -->
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Biodata
											</a>
										</li>
			                            <li>
											<a href="#account" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-settings"></i>
												</div>
												Instansi
											</a>
										</li>
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Finish
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<div class="col-sm-6">
								                <input type="hidden" class="form-control" name="bio_id" id="bio_id">
								                <div class="form-group">
								                <label for="nama_lengkap">nama lengkap</label>
								                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required="true">
								                </div>
								                <div class="form-group">
								                <label for="alamat_kantor">alamat kantor</label>
								                <textarea class="form-control" rows="2" name="alamat_kantor" id="alamat_kantor"></textarea>
								                </div>
								                <div class="form-group" id="groupEmail">
								                <label for="email">email</label>
								                <div class="input-group">
								                      <input type="text" class="form-control mail" name="email[]" id="email">
								                      <span class="input-group-addon"><button id="addEmail" type="button" class="btn btn-primary btn-sm btn-blue"><i class="fa fa-plus"></i></button></span>
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
								                      <div class="input-group-addon" data-target="#tanggalLahir" data-toggle="datetimepicker">
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
		                            </div>
		                            <div class="tab-pane" id="account">
		                                <div class="row">
		                                    <div class="col-md-12" id="notaris">
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
							                                    <div class="input-group-addon" data-target="#tanggalSKnotaris" data-toggle="datetimepicker">
							                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
							                                    </div>
							                                </div>
							                                </div>
							                                <div class="form-group">
							                                <label for="tanggal_ba">tanggal ba</label>
							                                <div class="input-group date" id="tanggalBaNotaris" data-target-input="nearest">
							                                    <input type="text" name="tanggal_ba_notaris" id="tanggal_ba_notaris" class="form-control datetimepicker-input" data-target="#tanggalBaNotaris"/>
							                                    <div class="input-group-addon" data-target="#tanggalBaNotaris" data-toggle="datetimepicker">
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
							              <div class="col-md-12" id="ippat">
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
							                                    <div class="input-group-addon" data-target="#tanggalSKIppat" data-toggle="datetimepicker">
							                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
							                                    </div>
							                                </div>
							                                </div>
							                                <div class="form-group">
							                                <label for="tanggal_ba">tanggal ba</label>
							                                <div class="input-group date" id="tanggalBaIppat" data-target-input="nearest">
							                                    <input type="text" name="tanggal_ba_ippat" id="tanggal_ba_ippat" class="form-control datetimepicker-input" data-target="#tanggalBaIppat"/>
							                                    <div class="input-group-addon" data-target="#tanggalBaIppat" data-toggle="datetimepicker">
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
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                    	<figure class="info-text">
			                                        <img src="<?=base_url()?>frontend/img/success.jpg" style="width: 50%" alt="">
			                                    </figure>
		                                        <p class="info-text">Anda telah melengkapi formulir. Jika Anda telah melengkapi form<br>Klik <strong>SIMPAN</strong> untuk melanjutkan pengisian <br>atau klik KEMBALI untuk memeriksa data anda</p>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Simpan' />
		                            </div>
		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Kembali' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            &copy; Pengwil Jawa Timur INI IPPAT | Partner Development Hosterweb
	        </div>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="<?=base_url()?>frontend/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>frontend/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>frontend/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?=base_url()?>frontend/js/demo.js" type="text/javascript"></script>
	<script src="<?=base_url()?>frontend/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="<?=base_url()?>frontend/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>frontend/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- date-range-picker -->
  <!-- <script src="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script> -->
  <!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script> -->
<!-- <script src="<?=base_url()?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script> -->
<!-- <script src="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- bs-custom-file-input -->
<script src="<?=base_url()?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	 <script type="text/javascript">
    $(function () {
    bsCustomFileInput.init();
    //Date range picker
    $('.date').find('input').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
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
          $("#groupEmail").append('<div class="input-group"><input type="text" class="form-control mail" name="email[]"><span class="input-group-addon"><button class="btn btn-danger btn-sm btn-red rmEmail" onclick="removeEmail(this)"><i class="fa fa-minus"></i></button></span></div>'); 
      }else{
        $("#addEmail").attr('disabled',true);
      }
    });
    
  </script>
</html>
