<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>frontend/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="<?=base_url()?>frontend/img/favicon.png" />
  <title>Material Bootstrap Wizard by Creative Tim | Free Boostrap Wizard</title>

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
                          <div class="wizard-header text-center">
                              <table width="100%">
                        <tr>
                          <td width="10%" class="text-center">
                            <img src="<?=base_url('assets/images/logo1.jpeg')?>" class="logo" style="width: 100%">
                          </td>
                          <td class="text-center" width="70%">
                            <h5 style="font-size:1.25vw !important;">FORM DATA ANGGOTA
                PENGURUS WILAYAH JAWA TIMUR IKATAN NOTARIS INDONESIA(INI)
                DAN
                PEJABAT PEMBUAT AKTA TANAH(IPPAT)</h5>
                          </td>
                          <td width="10%" class="text-center">
                            <img src="<?=base_url('assets/images/logo2.jpeg')?>" class="logo" style="width: 100%">
                          </td>
                        </tr>
                      </table>
                      <div class="row">
                        <div class="col-sm-12">
                            <figure class="info-text">
                                <img src="<?=base_url()?>frontend/img/sukses.png" style="width: 30%" alt="">
                            </figure>
                            <?php
                                if (($this->session->flashdata('message'))) {
                                  echo '<div class="alert alert-info">
                                    <span>'.$this->session->flashdata('message').' Klik <a href="'.base_url("register").'">disini</a> untuk kembali ke pendaftaran.
                                    </span>
                                  </div>';
                                }
                            ?>      
                        </div>
                      </div>
                      </div>
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
</html>
