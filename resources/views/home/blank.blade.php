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

<body class="sub_page">
<div class="hero_area">
    <div class="bg-box">
        <img src="{{asset('assets')}}/images/hero-bgs2.jpg" alt="">
    </div>

    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a href="{{route('index')}}" class="logo"><img width="150px" src="{{asset('assets')}}/images/logo.png"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Ana Sayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('menu')}}">Menü</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('about')}}">Hakkımızda<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('book')}}">Rezervasyon</a>
                        </li>
                    </ul>

                    <div class="user_options icon_container">
                        <a href="#" class="user_links">
                            <i class="fa fa-user" aria-hidden="true" style="color:white;"></i>
                        </a>
                        <a href="#" class="user_links">
                            <i class="fa fa-search" aria-hidden="true" style="color:white;"></i>
                        </a>
                        <a href="#" class="user_links">
                            <i class="fa fa-shopping-cart" aria-hidden="true" style="color:white;"></i>
                        </a>
                        <div class="login_register_popup">
                            <form class="login_form">
                                <h2>Login</h2>
                                <form action="{{ route('admin_logincheck') }}" method="post">
                                    @csrf
                                    <label for="username">Username:</label>
                                    <input type="text" id="username" name="username">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password">
                                    <button type="submit">Login</button>
                                </form>
                                <form class="register_form">
                                    <h2>Register</h2>
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password">
                                    <label for="confirm_password">Confirm Password:</label>
                                    <input type="password" id="confirm_password" name="confirm_password">
                                    <button type="submit">Register</button>
                                </form>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
<!-- end header section -->





@include('home._book')
@include('home._footer')

</body>

</html>
