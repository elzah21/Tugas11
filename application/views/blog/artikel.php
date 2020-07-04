<!DOCTYPE html>
<html>
<head>
  <title>ElzahEkaPutri</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</head>
  <div class="container">
  <img src="<?php echo base_url();?>img/DESAINLOGO.jpg" width="100%" height="20%"
    </p>
        <div class="alert alert-warning">
    <button class="btn btn-primary">Home</button>
    <button class="btn btn-primary">Tentang Sekolah </button>
  <button class="btn btn-primary">Data siswa </button>
  <button class="btn btn-primary">Pengumuman </button>
  <button class="btn btn-primary">masuk</button>

  <p>
    <P>
    <button class="btn btn-warning outline btn-circle collapsed">sistem penunjang keputusan adalah sistem yang menentukan keputusan yang di inputkan didalam sistem,sehingga apa yang telaah di inputkan <p>akan menghasilkan nilai yang di inginkan.dan dengan sistem ini pula dapat mempermuda pekerjaan.</p></button> 

<div class="container">
  <div class="alert alert-info">
    <h4>Data siswa</h4>
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
    foreach ($mahasiswa as $mhs): 
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
</p>
</P>
          <!-- /form login -->
          <p>
          Belajar lah dengan sungguh-sungguh</p>
<p>

<p align="center"class="bg-info">
Sistem Penunjang Keputusan (SPK) Penentuan siswa/i berprestasi</p>
</div>
</div>
</div>
</body>
</html>

