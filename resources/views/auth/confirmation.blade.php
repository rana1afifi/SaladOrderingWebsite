@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
          
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="/confirmation">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('confirmation') ? ' has-error' : '' }}">
                            <label for="confirmation" class="col-sm-4 control-label">Confirmation Code</label>

                            <div class="col-sm-8">
                                <input id="confirmation" type="text" class="form-control" name="confirmation"  required>

                                @if ($errors->has('confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    Confirm
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
@endsection