@extends('welcome')

@section('contents')
    @include('partials.admin-nav')

    <ol class="breadcrumb">
    	<li>
    		<a href="{{route('promises')}}">All Promises</a>
    	</li>
    	<li class="active">New Promise</li>
    </ol>

    <div class="container">
        {!! Form::open() !!}
        @include('partials._promiseForm')
        {!! Form::submit("Add Promise", ['class' => 'btn btn-primary btn-lg flat-ui']) !!}
        {!! Form::close() !!}
    </div>
@endsection