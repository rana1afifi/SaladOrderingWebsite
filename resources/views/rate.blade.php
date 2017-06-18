<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/background.css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">


        <title>Saladicious - Rate Salad Components</title>

		<!--Files included 
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>  
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
		  
        <link rel="stylesheet" type="text/css" href="  https://fonts.google.com/specimen/Raleway">
		  
		
        <!-- Styles -->
        <style>
            html, body 
            {
                color: #fffAff; 
                font-weight: bold;
                height: 100vh;
				filter: brightness(100%);
				background-color:#636b6f;
                background-repeat: no-repeat;
                
            }
            .navbar-default
	        { 
               background-color: #636b6f !important;
               color: #f5f8fa;
               font-family:cursive;
            }
	 
	       .navbar-brand
	        {
                color:white;
	            font-family:cursive;
                background-color: #636b6f !important; 
            }
        
        
            .navbar-default .navbar-brand 
            {
                color: #f5f5f5;
                background-color: #636b6f !important;
            }
            .navbar-default .navbar-nav>li>a 
            {
                color: #f5f5f5  !important;
                background-color: #636b6f; 
            }
            .navbar
            { background-color: #636b6f !important;}
            
            .step1
            {   
                background-color:#3c763d;
                background-image:url('images/SaladiciousMenu2.png');
                background-repeat: no-repeat;
            }
        </style>

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
                           
                        <li><a href="{{ url('/order') }}">Order Now </a></li>
                        <li><a href="{{ url('/rate') }}">Rating</a></li>
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

                        @endif
                        <li><a href="/menu">Menu</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <body>
    <div class="container"> 
 <section class="col-xs-12">	
        <form class="form-horizontal" role="form" method="POST" action="/rate" id="ratingsForm">
                <h1><center>Pick your favorite item in each step</center></h1>

              <div class="row justify-content-around">
                    <div class="col-md-4 offset-md-4"  style=" height: 600px; text-align: center ; background:url(images/Design.png) no-repeat center">
                    </div>
					{{ csrf_field() }}
                    <div class="col-md-4 offset-md-4"  style=" height: 600px; text-align: center ; background:url(images/Step1.png) no-repeat center">
                        <br> <br> <br> <br> <br><br> <br> <br> <br> <br>
						 <div class="StepsComp">
						 <br> 
                              <div class="Step1">
                                    @foreach($menu as $component)
                                        @if ( $component->step  == 1)
                                                 <div class="stars">
                                                    <input type="radio" name="Step1" value="{{ $component->name }}"class="star-5" id="star-5" />
                                                    <label class="star-5" for="star-5">{{ $component->name }}</label>
                                                    <span></span>
                                                 </div>
                                        @endif	
                                    @endforeach
                                    @if ($errors->has('Step1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Step1') }}</strong>
                                        </span>
                                    @endif
							</div>
				    </div>
                </div>
                <div class="col-md-4 offset-md-4"  style=" height: 600px; text-align: center ; background:url(images/Step2.png) no-repeat center">
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    @foreach($menu as $component)
                        @if ( $component->step  == 2)
                                <div class="stars">
                                    <input type="radio" name="Step2" value="{{ $component->name }}"class="star-5" id="star-5" />
                                    <label class="star-5" for="star-5">{{ $component->name }}</label>
                                    <span></span>
                                </div>
                        @endif	
                    @endforeach
                    @if ($errors->has('Step2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('Step2') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-4 offset-md-4"  style=" height: 600px; text-align: center ; background:url(images/Step3.png) no-repeat center">
                    <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br>
                    @foreach($menu as $component)
                       @if ( $component->step  == 3)
                            <div class="stars">
                                <input type="radio" name="Step3" value="{{ $component->name }}"class="star-5" id="star-5" />
                                <label class="star-5" for="star-5">{{ $component->name }}</label>
                                <span></span>
                            </div>
                        @endif	
                    @endforeach
                    @if ($errors->has('Step3'))
                        <span class="help-block">
                            <strong>{{ $errors->first('Step3') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4 offset-md-4"  style=" height: 600px; text-align: center ; background:url(images/Step4.png) no-repeat center">
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    @foreach($menu as $component)
                        @if ( $component->step  == 4)
                            <div class="stars">
                                <input type="radio" name="Step4" value="{{ $component->name }}"class="star-5" id="star-5" />
                                <label class="star-5" for="star-5">{{ $component->name }}</label>
                                <span></span>
                            </div>
                        @endif	
                    @endforeach
                    @if ($errors->has('Step4'))
                        <span class="help-block">
                            <strong>{{ $errors->first('Step4') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-4 offset-md-4"  style=" height: 600px; text-align:Center  ; background:url(images/Step5.png) no-repeat center">
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    @foreach($menu as $component)
                        @if ( $component->step  == 5)
                            <div class="stars">
                                <input type="radio" name="Step5" value="{{ $component->name }}"class="star-5" id="star-5" />
                                    <label class="star-5" for="star-5">{{ $component->name }}</label>
                                    <span></span>
                                 </div>
                        @endif	
                    @endforeach
                    @if ($errors->has('Step5'))
                        <span class="help-block">
                            <strong>{{ $errors->first('Step5') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <br> <br>
            <div class="row">
               
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-5">
                            <button type="submit" class="btn btn-primary" id="Done">
                                Done
                            </button>
                        </div>
                    </div>
                  </div>
					</form>
                </section>
            </div>
    </body>
     
</html>