<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <title>Saladicious</title>

		<!--Files included -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>  
        <!-- Fonts -->
         <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Tangerine">
		  
         <link rel="stylesheet" type="text/css"
          href="  https://fonts.google.com/specimen/Raleway">
		  
		
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fffAff; 
				font-family: 'Tangerine', serif;
                font-weight: bold;
                height: 100vh;
				filter: brightness(100%);
				
            }
            .full-height {
                height: 100vh;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 20px;
            }
            .content {
               justify-content: center;
            }
            .title {
                 font-size:200px;
				
            }
            .m-b-md {
                margin-bottom: 200px;
            }
        </style>
    </head>
    <body>
	<div style="background-image:url('http://img.sndimg.com/food/image/upload/q_92,fl_progressive/v1/img/recipes/26/41/85/lRpMpYBUQguVMK9UhzRl_pineapple-chicken-salad-peanut-dressing-asian-7665.jpg');background-repeat:no-repeat; 
   background-size:cover;">
   
   <div id="rectangle"></div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-rightlinks">
			<nav>
			<ul>
                @if (Auth::check())
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
                
				
				<li><a href="{{ url('/order') }}">Order Now </a></li>
                <li><a href="{{ url('/rate') }}">Rating</a></li>

                    @else
                <li><a href="{{ url('/register') }}">Register</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
                        
                    @endif	
			    <li><a href="{{ url('/menu') }}">Menu</a></li>
                </ul>
                </nav>
				</div>
            @endif

            <div class="content">
                <div class="title m-b-md" >
                    Saladicious
                </div>

				<header>
	
                </header>
 
            </div>
        </div>
        </div>
    </body>
</html>
