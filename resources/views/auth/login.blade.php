@extends('layouts.app')

@section('content')
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/validation.js" type="text/javascript">
  </script>
  <title>Saladicious - Login</title>
</head>


<div class="container">
    <div class="row">
        <section class="col-xs-12">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}" name="login">
                                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Your  Email" required autofocus>

                         @if ($errors->has('email'))
                            <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-sm-2 control-label">Password</label>                         
                    <div class="col-sm-10">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                         @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <div class="checkbox">
                         <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                         </label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input class="btn btn-default btn-lg" type="submit" id="loginbutton" value="Login" font>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <a class="btn btn-link" href="{{ route('password.request') }}"> Forgot Your Password?</a>
                    </div>
                </div>             

             </form>
        </section>
    </div>
 </div>

@endsection
