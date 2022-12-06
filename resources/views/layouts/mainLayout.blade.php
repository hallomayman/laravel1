<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('includes.pageIcon')
    @include('includes.pageStyle')
    @include('includes.pageJS')

</head>

<body class="sub_page">

<div class="hero_area">
    @include('includes.navbar')

</div>

@yield('page')


@include('includes.footer')


@include('includes.pageJS')

</body>

</html>
