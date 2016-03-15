@extends('welcome')

@section('contents')
    @include('partials.admin-nav')
    <ol class="breadcrumb">
        <li>
            <a href="{{route('clients')}}">All Clients</a>
        </li>
        <li class="active">New Client</li>
    </ol>
    <div class="container">
        {{var_dump($errors)}}
        {!! Form::open(['url' => route('store-client'), 'enctype' => 'multipart/form-data']) !!}
        @include('partials._clientForm')
        <div class="clearfix">
            {!! Form::submit('Add Client', ['class' => 'btn btn-primary btn-lg']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection