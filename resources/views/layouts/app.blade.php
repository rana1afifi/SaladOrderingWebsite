<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
    body {   
        background-image: url(http://afwbroker.com.au/wp-content/uploads/2013/04/bigstock-Salad-Greek-Salad-isolated-on-50225564.jpg ) ; 
        /*http://cdn1.wellplated.com/wp-content/uploads/2016/04/Caribbean-Grilled-Chicken-Salad.jpg*/
        background-size: cover;
        color:white; 
        background-repeat: no-repeat;
        background-position: center; 
        background-blend-mode: fixed; 
          }
    form {
        background-color:rgba(74, 107, 74, 0.59);  
        color:white;
        padding:40px  !important ; 
        margin-top:200px !important ; 
        margin-bottom: 200px !important ; 
        padding-bottom: 60px !important ;	
        border-radius: 25px !important ;
        text-align: center !important ;

        
    }
      h1
    {font-family: 'Rubik Mono One', sans-serif;
     text-align: left;}
	 .navbar-default
	 { 
	  background-color:rgba(74, 107, 74, 0.59); 
      color:white !important;
	  font-family:cursive;
	 }
	 
	 .navbar-brand
	 {color:white;
	  font-family:cursive;}
        
        navbar-default
{background-color:rgba(74, 107, 74, 0.59); 
        color:white;}
.navbar-default .navbar-brand {
    color: #f5f5f5;
}
.navbar-default .navbar-nav>li>a {
    color: #f5f5f5  !important;
}

      </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

  
       <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
       <a class="navbar-brand" href="/">Saladicious</a>
                  
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li>
                        <li><a href="{{ url('/order') }}">Order Now </a></li>
                        <li><a href="{{ url('/rate') }}">Rating</a></li>
                        @endif
                        <li><a href="/menu">Menu</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
  

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</html>