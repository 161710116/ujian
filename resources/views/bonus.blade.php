<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Data Siswa</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body bgcolor="green" class="container">
		<div class="col-sm-8 col-sm-offset-2">
		<center><i><h1>Bonus</h1></i></center>
			@foreach ($mahasiswa as $temp)
				<h3><strong> Nama <small>: {{$temp->nama}}</small><br></strong>
				<li><strong>Nama Wali <small> :{{$temp->wali->nama}}</small></strong></li>
				<li><strong>Alamat Wali <small>: {{$temp->wali->alamat}}</small></strong></li>
				<li><strong>Nama Dosen  <small>:{{$temp->dosen->nama}}</strong></li></small>
				<li> <strong>Jurusan <small>:{{$temp->jurusan->nama}}</strong></li></small>
				<li> <strong>Mata Pelajaran<small> : 
			@foreach($temp->mata_kuliah as $tampung) 
					{{$tampung->nama}}
			@endforeach
					</li></strong></small>
					

				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>