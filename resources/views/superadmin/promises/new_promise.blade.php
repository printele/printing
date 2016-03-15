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
        {!! Form::open(['url' => route('store-promise'), 'enctype' => 'multipart/form-data']) !!}
        @include('partials._promiseForm')
        {!! Form::submit("Add Promise", ['class' => 'btn btn-primary btn-lg flat-ui']) !!}
        {!! Form::close() !!}
    </div>
@endsection