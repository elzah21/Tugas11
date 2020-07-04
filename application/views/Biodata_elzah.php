<div class="container">
  <div class="alert alert-info">
    <h4>Data Mahasiswa</h4>
  </div>
<table class="table">
  <tr>
    <td>No</td>
    <td>NPM</td>
    <td>Nama</td>
    <td>Jenis Kelamin</td>
    <td>Program Studi</td>
    <td>Action</td>
  </tr>
  <?php 
    $no=1;
    foreach ($biodata_elzah as $mhs): 
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $mhs->npm ?></td>
    <td><?php echo $mhs->nama ?></td>
    <td><?php echo $mhs->jk ?></td>
    <td><?php echo $mhs->prodi ?></td>
    <td>
      <a href="<?php echo base_url().'index.php/mahasiswa/edit/' ?><?php echo $mhs->id ?>"><button class="btn btn-md btn-primary">Edit</button></a>
      <a href="<?php echo base_url().'index.php/mahasiswa/delete/' ?><?php echo $mhs->id ?>"><button class="btn btn-md btn-danger">Hapus</button></a>

    </td>
  </tr>
<?php endforeach; ?>
</table>
</div>