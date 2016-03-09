@extends('welcome')

@section('contents')
    @include('partials.admin-nav')
    <ol class="breadcrumb">
    	<li>
    		<a href="{{route('products')}}">All Products</a>
    	</li>
    	<li class="active">New Products</li>
    </ol>
    <div class="container">
        {!! Form::open() !!}
        @include('partials._productForm')
        {!! Form::close() !!}
    </div>
@endsection