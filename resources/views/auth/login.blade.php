@extends('master')

@section('contents')

    <section class="clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <section class="col-md-6" id="login">
                        <div class="row">
                            {!! Form::open(['url' => route('sign-in')]) !!}
                            <h3 class="page-header">
                                Already registered
                            </h3>
                            @if(Session::has('info'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Error:</strong> {{Session::get('info')}}
                                </div>
                            @endif
                            <div class="form-group {{$errors->has('lemail') ? 'has-error' : ''}}">
                                {!! Form::label('lemail', 'Email:', ['class' => 'control-label']) !!}
                                {!! Form::text('lemail', old('lemail'), ['class' => 'form-control flat-ui', 'placeholder' => 'someone@example.com']) !!}
                                @if($errors->has('lemail'))
                                    <span class="help-block">{{$errors->first('lemail')}}</span>
                                    <?php echo substr($errors->first('lemail'), 0) . ' ' . rtrim($errors->first('lemail'), "l")   ?>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('lpassword') ? 'has-error' : ''}}">
                                {!! Form::label('lpassword', 'Password:', ['class' => 'control-label']) !!}
                                {!! Form::password('lpassword', ['class' => 'form-control flat-ui', 'placeholder' => '*****************']) !!}
                                @if($errors->has('lpassword'))
                                    <span class="help-block">{{$errors->first('lpassword')}}</span>
                                @endif
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember" name="remember" id="remember">
                                    Keep me logged in on this computer
                                </label>
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Get In', ['class' => 'btn btn-primary flat-ui']) !!}
                            </div>


                            {!! Form::close() !!}
                        </div>
                    </section>
                    <section class="col-md-6" id="register">
                        {!! Form::open(['url' => route('sign-up')]) !!}
                        <h3 class="page-header">
                            new customer
                        </h3>
                        @if(Session::has('reg'))
                            <div class="alert alert-danger">
                            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            	<strong>Error:</strong> {{Session::get('reg')}}
                            </div>
                        @endif
                        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control flat-ui', 'placeholder' => 'John Doe']) !!}
                            @if($errors->has('name'))
                                <span class="help-block">{{$errors->first('name')}}</span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                            {!! Form::label('business_name', 'Business Name(Optional):', ['class' => 'control-label']) !!}
                            {!! Form::text('business_name', old('business_name'), ['class' => 'form-control flat-ui', 'placeholder' => 'Printele']) !!}
                            @if($errors->has('name'))
                                <span class="help-block">{{$errors->first('name')}}</span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                            {!! Form::email('email', old('email'), ['class' => 'form-control flat-ui', 'placeholder' => 'someone@example.com']) !!}
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

                        <div class="form-group {{$errors->has('password_confirmation') ? 'has-error' : ''}}">
                            {!! Form::label('password_confirmation', 'Password:', ['class' => 'control-label']) !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control flat-ui', 'placeholder' => '*****************']) !!}
                            @if($errors->has('password_confirmation'))
                                <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                            {!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
                            {!! Form::text('address', old('address'),['class' => 'form-control flat-ui', 'placeholder' => 'Plot 23, Teshie - Nungua']) !!}
                            @if($errors->has('address'))
                                <span class="help-block">{{$errors->first('address')}}</span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('location') ? 'has-error' : ''}}">
                            {!! Form::label('location', 'Location:', ['class' => 'control-label']) !!}
                            {!! Form::text('location', old('location'),['class' => 'form-control flat-ui', 'placeholder' => 'Accra']) !!}
                            @if($errors->has('location'))
                                <span class="help-block">{{$errors->first('location')}}</span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('phone_number') ? 'has-error' : ''}}">
                            {!! Form::label('phone_number', 'Phone Number:', ['class' => 'control-label']) !!}
                            {!! Form::text('phone_number', old('phone_number'), ['class' => 'form-control flat-ui', 'placeholder' => '*****************']) !!}
                            @if($errors->has('phone_number'))
                                <span class="help-block">{{$errors->first('phone_number')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Process', ['class' => 'btn btn-primary flat-ui']) !!}
                        </div>

                        {!! Form::close() !!}

                    </section>
                </div>
            </div>
        </div>
    </section>



@endsection