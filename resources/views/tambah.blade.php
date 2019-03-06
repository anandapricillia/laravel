<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<form action="/kategory/store" method="post">
		{{ csrf_field() }}
		nama_kategory 
        <input type="text" name="nama_kategory" required="required"> <br/>
		slug
        <input type="text" name="slug" required="required"> <br/>
		tanggal input
        <input type="number" name="tanggal_input_data" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>