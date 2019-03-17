<!DOCTYPE html>
<html>
<head>
<title> Kategori </title>
</head>

<body>
<table border="3px">
<tr>
<td>Nama Kategori</td>
<th>SLUG</th>
</tr>

@foreach($hasil as $data)
<tr>
<td>{{$data->nama_kategory}}</td>
<td>{{$data->remarks}}</td>
</tr>
@endforeach
</table>

</body>
</html>