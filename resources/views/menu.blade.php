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

        <title>Saladicious - Menu</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">


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
                color: #fffAff; 
                font-weight: bold;
                height: 100vh;
				filter: brightness(100%);
				background-color:#d3d3d3;
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
	
	<div class="menu" style="background-image:url('http://i67.tinypic.com/2bupnd.jpg');background-repeat:no-repeat; ">
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
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                </ul>
                            </nav>
                        </div>
                    @endif
            </div>
            <div class="StepsComp">
                <div class="Step1">
                     <ul>
                       @foreach($menu as $component)
                            @if ( $component->step  == 1)
                                <li>{{ $component->name }}</li>
                            @endif	
                        @endforeach
                         
                     </ul>
                </div>

                <div class="Step2">
                     <ul>
                       @foreach($menu as $component)
                            @if ($component->step == 2)
                                <li>{{ $component->name }}</li>
                            @endif	
                        @endforeach
                     </ul>
                </div>

                <div class="Step3">
                     <ul>
                       @foreach($menu as $component)
                            @if ( $component->step == 3)
                                <li>{{ $component->name }}</li>
                            @endif	
                        @endforeach
                     </ul>
                </div>

                <div class="Step4">
                     <ul>
                      @foreach($menu as $component)
                            @if ($component->step == 4)
                                <li>{{ $component->name }}</li>
                            @endif	
                        @endforeach
                    </ul>
                </div>

                <div class="Step5">
                     <ul>
                      @foreach($menu as $component)
                        @if ($component->step == 5)
                            <li>{{ $component->name }}</li>
                         @endif	
                        @endforeach
                     </ul>
                </div>
            </div>
        </div>
    </body>
</html>