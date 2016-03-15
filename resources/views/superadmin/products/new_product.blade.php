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
        {!! Form::open(['url' => route('store-product'), 'enctype' => 'multipart/form-data']) !!}
        @include('partials._productForm')
        <div class="clearfix">
            {!! Form::submit('Add Product', ['class' => 'btn btn-primary btn-lg']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection