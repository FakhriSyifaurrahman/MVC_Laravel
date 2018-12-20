<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title') | MyWeb</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		@include('include.header')
	</div>

	<div class="container">
		@yield('content')
	</div>
</body>
</html>