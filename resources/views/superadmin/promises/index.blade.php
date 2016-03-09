@extends('welcome')

@section('contents')
    @include('partials.admin-nav')
    <ol class="breadcrumb">
       <div class="container"> <li class="active">All Promises</li></div>
    </ol>
    <div class="container">
        @for($i = 0; $i < 10; $i++)
            <div class="col-md-3">
                <div class="media">
                    {!! Html::image(url('images/best_value.png'), null, ['class' => 'media-middle']) !!}
                    <div class="media-body">
                        <h4 class="media-heading text-center">
                            Best Value
                        </h4>

                        <p>
                            Resurrection is not enlightened in unprepared places, the kingdom, or earth, but everywhere.
                        </p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection