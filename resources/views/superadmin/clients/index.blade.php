@extends('welcome')

@section('contents')
    @include('partials.admin-nav')
    <ol class="breadcrumb">
        <li class="active">All Clients</li>
    </ol>
    <div class="container">
        @foreach($clients as $client)
            <div class="col-md-3 ">
                <div class="media card">
                    <figure class="media-middle">
                        <img src="{{url($client->logo)}}" alt="Client's Logo" class="img-responsive">
                    </figure>
                    <div class="media-body">
                        <h3 class="media-heading text-center">
                            {{$client->name}}
                        </h3>
                    </div>
                    {!! Form::open(['url' => route('delete-client', ['id' => $client->id]), 'method' => 'DELETE', 'class' => 'close']) !!}
                    <button type="submit">&times;</button>
                    {!! Form::close() !!}
                </div>

            </div>
        @endforeach
    </div>



@endsection