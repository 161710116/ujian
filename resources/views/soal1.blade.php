<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Data Siswa</title>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
		<center><h1><small>One To Many</small></h1></center>
			@foreach ($dosen as $temp)
				<h3> <small>Nama Dosen: {{$temp->nama}}</small><br>
					@foreach($temp->mahasiswa as $tampung) 
					<li>Nama Mahasiswa : {{$tampung->nama}}
					@endforeach
					
					</li>
					

				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>