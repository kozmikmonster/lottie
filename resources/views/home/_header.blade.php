<!-- header section strats -->


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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Ana Sayfa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menu')}}">Menü</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('book')}}">Rezervasyon</a>
                    </li>



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

<!-- end header section -->

