!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DataAlumni</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataAlumni</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>Tb_alumni List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Npm</th>
		<th>Nama</th>
		<th>Jk</th>
		<th>Alamat</th>
		<th>Prodi</th>
		<th>Angkatan</th>
		<th>Id Pekerjaan</th>
		<th>Alamat Kantor</th>
		<th>Keterangan</th>
		
            </tr><?php
            foreach ($alumni_data as $alumni)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $alumni->npm ?></td>
		      <td><?php echo $alumni->nama ?></td>
		      <td><?php echo $alumni->jk ?></td>
		      <td><?php echo $alumni->alamat ?></td>
		      <td><?php echo $alumni->prodi ?></td>
		      <td><?php echo $alumni->angkatan ?></td>
		      <td><?php echo $alumni->id_pekerjaan ?></td>
		      <td><?php echo $alumni->alamat_kantor ?></td>
		      <td><?php echo $alumni->keterangan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->