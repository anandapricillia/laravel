<html>
<head>
	<title>templating</title>
</head>
<body 
	style= "background-color: #87CEFA">

<table border="1" width="100%" height="100%">
    <tr>
        <th> @include('layout.sidebar') </th>
        <th> @yield('content') </th>
    </tr>
</body>

</html>