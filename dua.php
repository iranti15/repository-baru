<!DOCTYPE html>
<html>
<head>
	<title>Data
</head>
<body>

	<h2>CampusPedia</h2>
	<h3>Info</h3>

	<a href ="/laravel/tambah"> + Tambah Info Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama Informasi</th>
			<th>Jenis Kategori</th>
		</tr>
		@foreach($info as $i)
		<tr>
			<td>{{$i->info_nama}}</td>
			<td>{{$p->info_kategori}}</td>
			<td>
				<a href="/laravel/edit/{{$->info_id}}">Edit</a>
				<a href="/laravel/hapus/{{$->info_id}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>
