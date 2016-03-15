@extends('welcome')

@section('contents')
    @include('partials.admin-nav')
    <ol class="breadcrumb">
        <li class="active">Gallery</li>
    </ol>
    <div class="container">
        @foreach($gallery as $item)
            <div class="col-lg-12" style="margin-bottom: 10px;">
                <div class="media card">
                    <figure class="col-md-7">
                        <iframe width="100%"
                                src="{{$item->url}}"
                                height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>
                    </figure>
                    <div class="col-md-5">
                        <h3 class="media-heading page-header text-center">
                            {{$item->name}}
                        </h3>

                        <p>
                            {{$item->description}}
                        </p>
                        <span>Customer Name:</span>
                    </div>
                    {!! Form::open(['url' => route('delete-item', ['id' => 1]), 'method' => 'DELETE', 'class' => 'close']) !!}
                    <button type="submit">&times;</button>
                    {!! Form::close() !!}
                </div>
            </div>
        @endforeach
    </div>



@endsection