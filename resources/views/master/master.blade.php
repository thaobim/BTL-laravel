<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon/favicon.png"/>
	<script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/210a71fc0f.js"></script>
	<title>Thực phẩm sạch</title>
</head>
<body>
    <!-- header -->
        @include('master.header')
    <!-- /header -->
    <!-- content -->
        @yield('content')
    <!-- /content -->

    <!-- footer -->
        @include('master.footer')
    <!-- /footer -->


</body>
</html>
