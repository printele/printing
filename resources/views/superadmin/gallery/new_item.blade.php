@extends('welcome')

@section('contents')
    @include('partials.admin-nav')
    <ol class="breadcrumb">
        <li>
            <a href="{{route('gallery')}}">Gallery</a>
        </li>
        <li class="active">New Item</li>
    </ol>
    <div class="container">
        {!! Form::open(['url' => route('store-item')]) !!}
        @include('partials._galleryForm')
        <div class="clearfix">
            {!! Form::submit('Add Item', ['class' => 'btn btn-primary btn-lg']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection