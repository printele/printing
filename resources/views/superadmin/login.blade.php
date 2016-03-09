@extends('welcome')

@section('contents')
    <div class="container">
        <div class="col-lg-4 col-lg-offset-4" style="margin-top: 10%;">
            {!! Form::open() !!}
            {!! Html::image(url('images/logo.png'), 'Official Printele Logo', ['class' => 'img-responsive',
            'style' => 'margin-bottom:15px;']) !!}
            @if(Session::has('info'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Error:</strong> {{Session::get('info')}}
                </div>
            @endif
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                {!! Form::text('email', old('email'), ['class' => 'form-control flat-ui', 'placeholder' => 'someone@example.com']) !!}
                @if($errors->has('email'))
                    <span class="help-block">{{$errors->first('email')}}</span>
                @endif
            </div>

            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control flat-ui', 'placeholder' => '*****************']) !!}
                @if($errors->has('password'))
                    <span class="help-block">{{$errors->first('password')}}</span>
                @endif
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember" name="remember" id="remember">
                    Keep me logged in on this computer
                </label>
            </div>

            <div class="form-group">
                {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block flat-ui']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

