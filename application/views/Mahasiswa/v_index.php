<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>

<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">


<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</head>
<body>
	<div class ="container"
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tambah Data</a>
      </li>
    </ul>
   <a>Lily Hafipah</a>
  </div>

</nav>
<div class="alert alert-primary" role="alert">
	<h3 align="center">lily hafipah</h3>
	
</div>
<div class="card">
  <div class="card-body">
  	<h5 class="card-title">Data mahasisw</h5>
  	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">nama</th>
      <th scope="col">nim</th>
       <th scope="col">alamat</th>
        <th scope="col">aksi</th>

    </tr>
     
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>lily</td>
      <td>190105</td>
      <td>tohpati</td>
      <td><button type="button" class="btn btn-warning">edit</button>
      	<button type="button" class="btn btn-danger">delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>hafipah</td>
      <td>19010500</td>
      <td>narmada</td>
        <td><button type="button" class="btn btn-warning">edit</button>
      	<button type="button" class="btn btn-danger">delete</button></td>
    </tr>
    
  </tbody>
</table>

    
  </div>
</div>



</body>
</html>