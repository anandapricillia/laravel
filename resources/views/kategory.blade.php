<html>
<head>
	<title>Kategori</title>
</head>
<style>
body {
	background-color: #ADD8E6
}
</style>
<br>
    <center>
	    <h2>Daftar Kategori Film</h2>
    </center>
 
	<a href="kategory/tambah"> + Tambah Kategori Baru</a>
	
	<br/>
	<br/>
 
	<table border="1" width="100%">
		<tr>
			<th>ID</th>
			<th>Nama Kategori</th>
			<th>SLUG</th>
			<th>Opsi</th>
		</tr>
		@foreach($Kategory as $Kategorys)
		<tr>
            <td>{{ $Kategorys->id }}</td>
			<td>{{ $Kategorys->nama_kategory }}</td>
			<td>{{ $Kategorys->slug }}</td>
			<td>
				<a href="/kategory/edit/{{ $Kategorys->id }}">Edit</a>
				|
				<a href="/kategory/hapus/{{ $Kategorys->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>