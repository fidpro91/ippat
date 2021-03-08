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
                    <h5 class="card-title">Master Biodata PPAT</h5>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" id="formInput" style="display: none;">
                    <form class="form-horizontal" method="post"  enctype="multipart/form-data" action="<?=base_url('biodata/save')?>">
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
                    <div class="card-footer">
                      <button class="btn btn-primary">Simpan</button>
                      <button class="btn btn-warning" onclick="$('#formInput').hide()" type="button">Batal</button>
                    </div>
                    </form>
                    <!-- /.row -->
                  </div>
                  <!-- ./card-body -->
                  <div class="card-body">
                    <table class="table table-bordered" id="tableBiodata">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Lengkap</th>
                          <th>TTL</th>
                          <th>Pengda</th>
                          <th>Alamat Kantor</th>
                          <th>#</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        foreach ($data as $key => $value) {
                          
                          $action ='<button onclick="set_val(\''.$value->bio_id.'\')" class="btn btn-xs btn-info" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>';
                          $action .=' <a href="#" onclick="view_data(\''.$value->bio_id.'\')" class="btn btn-xs  btn-info" title="view"><i class="fas fa-eye"></i></a>';
                         $action .=' <a href="'.base_url("biodata_ppat/delete/$value->bio_id").'" class="btn btn-xs  btn-danger" title="Delete">
                          <i class="fas fa-trash"></i>
                                      </a';
                          echo "<tr>
                            <td>".($key+1)."</td>
                            <td>$value->nama_lengkap</td>
                            <td>$value->tempat_lahir, $value->tanggal_lahir</td>
                            <td>$value->pengda</td>
                            <td>$value->alamat_kantor</td>
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
    //Date range picker
    $('#tanggalLahir, #tanggalBa, #tanggalSK').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  });
  function set_val(id) {
    $("#formInput").show();
    $.get('biodata_ppat/find/'+id,function(data){
        $.each(data,function(ind,obj){
          if (ind != 'upload_sk' && ind != 'upload_ba') {
            $("#"+ind).val(obj);
          }
        });
    },'json');
  }
  function view_data(id) {
    $.get('biodata_ppat/find/'+id,function(data){
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
</script>