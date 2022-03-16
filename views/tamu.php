    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">   
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Id</th>
                      <th>Nik</th>
                      <th>Nama Lengkap</th>
                      <th>Tipe Identitas</th>
                      <th>Kewarganegaraan</th>
                      <th>Alamat</th>
                      <th>Provinsi</th>
                      <th>Nomor</th>
                      <th>Email</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no=0;
                      foreach ($tamu->result() as $value):
                        $no++;
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $value->id_tamu; ?></td>
                      <td><?php echo $value->nik; ?></td>
                      <td><?php echo $value->nama_lengkap ?></td>
                      <td><?php echo $value->tipe_identitas ?></td>
                      <td><?php echo $value->kewarganegaraan ?></td>
                      <td><?php echo $value->alamat ?></td>
                      <td><?php echo $value->provinsi ?></td>
                      <td><?php echo $value->no_telp ?></td>
                      <td><?php echo $value->email ?></td>
                      <td>
                        <a href=" <?php echo base_url('tamu/ubah/').$value->id_tamu ?>" class="btn btn-xs btn-warning">Edit</a>
                        <a href=" <?php echo base_url('tamu/hapus/').$value->id_tamu ?>" class="btn btn-xs btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <?php 
                      endforeach;
                    ?>
                  </tbody>
                </table> 
              </div>
             
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->