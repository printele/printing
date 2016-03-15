@extends('welcome')

@section('contents')
    @include('partials.admin-nav')
    <ol class="breadcrumb">
        <li class="active">All Promises</li>
    </ol>
    <div class="container">
        @if($promises->count() == 0)

        @else
            @foreach($promises as $promise)
                <div class="col-md-3">
                    <div class="media card">
                        <figure class="media-middle">{!! Html::image(url($promise->image_path), null, ['class' => 'img-responsive']) !!}</figure>
                        <div class="media-body">
                            <h4 class="media-heading text-center">
                                {{$promise->title}}
                            </h4>

                            <p class="text-center" style="height: 36px; overflow: hidden;">
                                {{$promise->description}}
                            </p>
                        </div>
                        {!! Form::open(['url' => route('delete-promise', ['id' => $promise->id]), 'method' => 'DELETE', 'class' => 'close']) !!}
                        <button type="submit">&times;</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection