<div class="content-wrapper">
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h5 class="card-title">Master Biodata Ini</h5>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <?php
                  print_r($this->session->flashdata('message'));
                    if ($this->session->flashdata('message')) {
                        echo '<div class="callout callout-info">'.$this->session->flashdata('message').'</div>';
                    }
                  ?>
                  <div class="card-body" id="formInput" style="display: none;">
                    <form class="form-horizontal" method="post"  enctype="multipart/form-data" action="<?=base_url('biodata_ini/save')?>">
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
                                    <a href="#" class="btn btn-primary" id="addEmail"><i class="fa fa-plus"></i></a>
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
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select name="jabatan" id="jabatan" class="form-control" required="true">
                                        <option value="">Pilih</option>
                                        <option>NOTARIS</option>
                                        <option>IPPAT</option>
                                        <option>NOTARIS & IPPAT</option>
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
                                      </div>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                      <div class="card-footer">
                        <button class="btn btn-primary">Simpan</button>
                        <button class="btn btn-warning" onclick="$('#formInput').hide()" type="button">Batal</button>
                      </div>
                    </form>
                    <!-- /.row -->
                  </div>
                  <!-- ./card-body -->
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-inline">
                                <label>Jabatan : </label>
                                  <select name="f_jabatan" id="f_jabatan" class="form-control" required="true">
                                      <option value="">Pilih</option>
                                      <option>NOTARIS</option>
                                      <option>IPPAT</option>
                                      <option>NOTARIS & IPPAT</option>
                                  </select>
                                <div id="dv1">
                                  <label>Pengda : </label>
                                  <select name="f_pengda_ippat" id="f_pengda_ippat" class="form-control">
                                    <option value="">Pilih</option>
                                      <?php
                                        foreach ($pengdaIppat as $key => $value) {
                                            echo("<option>$value->pengda</option>");
                                        }
                                      ?>
                                  </select>
                                </div>
                                <div id="dv2">
                                  <label>Pengda : </label>
                                  <select name="f_pengda_notaris" id="f_pengda_notaris" class="form-control">
                                    <option value="">Pilih</option>
                                      <?php
                                        foreach ($pengdaNotaris as $key => $value) {
                                            echo("<option>$value->pengda</option>");
                                        }
                                      ?>
                                  </select>
                                </div>
                                <button class="btn btn-info">Cari</button>
                            </form>
                        </div>
                    </div>
                    <table class="table table-bordered" id="tableBiodata">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Lengkap</th>
                          <th>TTL</th>
                          <th>Pengda</th>
                          <th>Alamat Kantor</th>
                          <th>Telp</th>
                          <th>Email</th>
                          <th>Downloads</th>
                          <th>#</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        foreach ($data as $key => $value) {
                          
                          $action ='<button onclick="set_val(\''.$value->bio_id.'\')" class="btn btn-xs btn-primary" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>';
                        $action .=' <a href="#" onclick="view_data(\''.$value->bio_id.'\')" class="btn btn-xs  btn-info" title="view"><i class="fas fa-eye"></i></a>';
                         $action .=' <a href="'.base_url("biodata_ini/delete/$value->bio_id").'" class="btn btn-xs  btn-danger" title="Delete">
                          <i class="fas fa-trash"></i>
                                      </a>';
                          $download='';
                          if ($value->upload_sk_notaris) {
                            $download .= '<a href="'.base_url('assets/uploads/ini/'.$value->upload_sk_notaris).'" download>SK Notaris</a>';
                          }
                          if ($value->upload_sk_ippat) {
                            $download .= ' | <a href="'.base_url('assets/uploads/ppat/'.$value->upload_sk_ippat).'" download>SK IPPAT</a>';
                          }
                          if ($value->upload_ba_notaris) {
                            $download .= ' | <a href="'.base_url('assets/uploads/ini/'.$value->upload_ba_notaris).'" download>BA Notaris</a>';
                          }
                          if ($value->upload_ba_ippat) {
                            $download .= ' | <a href="'.base_url('assets/uploads/ppat/'.$value->upload_ba_ippat).'" download>BA IPPAT</a>';
                          }
                          echo "<tr>
                            <td>".($key+1)."</td>
                            <td>$value->nama_lengkap</td>
                            <td>$value->tempat_lahir, $value->tanggal_lahir</td>
                            <td>$value->pengda_notaris</td>
                            <td>$value->alamat_kantor</td>
                            <td>$value->telp_kantor</td>
                            <td>$value->email1</td>
                            <td>$download</td>
                            <td>$action</td>
                          </tr>" ;
                        }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">View Profil</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table id="viewData" class="table table-bordered">
              <tbody></tbody>
          </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnEdit">Edit</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<script>
  $(function () {
    bsCustomFileInput.init();
    $('#tableBiodata').DataTable({
      dom: 'Bfrtip',
        buttons: [
            {
            extend : 'excel',
            text : 'Excel',
            title: 'Data Excel',
            exportOptions : {
                modifier : {
                    // DataTables core
                    order : 'index',  // 'current', 'applied', 'index',  'original'
                    page : 'all',      // 'all',     'current'
                    search : 'none'     // 'none',    'applied', 'removed'
                },columns: [ 0, ':visible' ]
            }},
            {
            extend : 'pdf',
            text : 'Pdf',
            title: 'Data PDF',
            exportOptions : {
                modifier : {
                    // DataTables core
                    order : 'index',  // 'current', 'applied', 'index',  'original'
                    page : 'all',      // 'all',     'current'
                    search : 'none'     // 'none',    'applied', 'removed'
                },columns: [ 0, ':visible' ]
            }}
            , 'print',

        ]
    });
    $('#tanggalLahir, #tanggalBaNotaris, #tanggalSKIppat, #tanggalBaIppat, #tanggalSKnotaris').datetimepicker({
        format: 'YYYY-MM-DD'
    });

    $("#jabatan").change(function(){
        $("#ippat").find('input, select').val('');
        $("#notaris").find('input, select').val('');
        $("#pengda_notaris, #pengda_ippat").attr('required',false);
        if ($(this).val() == 'NOTARIS') {
          $("#notaris").show();
          $("#pengda_notaris").attr('required',true);
          $("#ippat").hide();
        }else if($(this).val() == 'IPPAT') {
          $("#notaris").hide();
          $("#ippat").show();
          $("#pengda_ippat").attr('required',true);
        }else if($(this).val() == 'NOTARIS & IPPAT') {
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
  function set_val(id) {
    $("#formInput").show();
    $.get('biodata_ini/find/'+id,function(data){
        $("#jabatan").val(data.jabatan).trigger('change');
        $.each(data,function(ind,obj){
          if (ind.includes('upload_sk') == false && ind.includes('upload_ba') == false && ind.includes('email') == false){
            $("#"+ind).val(obj);
          }
        });
        $(".mail").val(data.email1);
        if (data.email2) {
          $("#groupEmail").append('<div class="input-group"><input type="text" class="form-control mail" name="email[]" value="'+data.email2+'"><a href="#" class="btn btn-danger rmEmail" onclick="removeEmail(this)"><i class="fa fa-minus"></i></a></div>');
        }
        if (data.email3) {
          $("#groupEmail").append('<div class="input-group"><input type="text" class="form-control mail" name="email[]" value="'+data.email3+'"><a href="#" class="btn btn-danger rmEmail" onclick="removeEmail(this)"><i class="fa fa-minus"></i></a></div>');
        }
    },'json');
  }

  function view_data(id) {
    $.get('biodata_ini/find/'+id,function(data){
        $("#modal-lg").modal('show');
        $('#viewData > tbody > tr').remove();
        $.each(data,function(ind,obj){
          $('#viewData > tbody').append("<tr><td>"+ind+"</td><td>:</td><td>"+obj+"</td></tr>");
        });
        $("#btnEdit").attr("onclick",'set_val('+data.bio_id+')');
    },'json');
  }

  $(".btn-tool").click(function(){
    $("#formInput").show();
  });

  function removeEmail(a){
    $(a).closest('div').remove();
    $("#addEmail").attr('disabled',false);
  }
  $("#addEmail").click(function(){
    if ($(".mail").length <= 2) {
        $("#groupEmail").append('<div class="input-group"><input type="text" class="form-control mail" name="email[]"><a href="#" class="btn btn-danger rmEmail" onclick="removeEmail(this)"><i class="fa fa-minus"></i></a></div>'); 
    }else{
      $("#addEmail").attr('disabled',true);
    }
  });
</script>