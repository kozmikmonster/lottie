<!DOCTYPE html>
<html lang="">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Site Metas -->
    <title> @yield('title') </title>
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content="Lottie">
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.png" type="">


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.css">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- nice select  -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
          integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
          crossorigin="anonymous">
    <!-- font awesome style -->
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/dropdown.css" rel="stylesheet">
    <!-- responsive style -->
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">

</head>

<body>
<body class="sub_page">
<div class="hero_area">
    <div class="bg-box">
        <img src="{{asset('assets')}}/images/hero-bgs2.jpg" alt="">
    </div>


    @include('home._header')

    @include('home._slider')

    @include('home._footer')


</body>


</html>
