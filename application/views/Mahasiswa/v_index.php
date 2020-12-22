<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>

<link rel="stylesheet"
 href="<?=base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">

</head>
<body>
  <div class="container">	
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?= site_url('mahasiswa/tambah')?>" >Tambah data</a>
      </li>
      
    </ul>
  
     <a>Lily Hafipah</a> 
   
  </div>

</nav>
<div class="alert alert-primary" role="alert" align="center">
	LILYHAFIPAH/1901050011
	
</div>
<div class="card">
<div class="card-body">
Data Mahasiswa


  	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>

    </tr>
     
  </thead>
  <tbody>
  	<?php $no = 1; ?>
  	<?php foreach ($tbl_mahasiswa as $isi) { ?>
  	
    <tr>
      <td class="text-center"><?= $no++ ?></td>

      <td><?= $isi->nama ?></td>
      <td><?= $isi->nim ?></td>
      <td><?= $isi->alamat ?></td>
      <td class = "text-center">


        <a href="<?=site_url('mahasiswa/hapus/'.$isi->nim)?>"
          onclick="return confirm('Serius Nih?')"
        class = "btn btn-danger btn-sm">Del</a>

        <a href="<?=site_url('mahasiswa/edit/'. $isi->nim)?>"
          class="btn btn-danger btn-sm">Edit</a>
        </td>
    </tr>

    <?php } ?>
  </tbody>
</table>

    
  </div>
</div>



</body>
</html>