<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/sources/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/sources/assets/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="/sources/assets/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="/sources/assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/sources/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/sources/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/sources/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/sources/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/sources/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/sources/assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    @include('header')

    @yield('content')

    @include('footer')

<!-- Js Plugins -->
<script src="/sources/assets/js/jquery-3.3.1.min.js"></script>
<script src="/sources/assets/js/bootstrap.min.js"></script>
<script src="/sources/assets/js/jquery.nice-select.min.js"></script>
<script src="/sources/assets/js/jquery.barfiller.js"></script>
<script src="/sources/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/sources/assets/js/jquery.slicknav.js"></script>
<script src="/sources/assets/js/owl.carousel.min.js"></script>
<script src="/sources/assets/js/jquery.nicescroll.min.js"></script>
<script src="/sources/assets/js/main.js"></script>
</body>

</html>