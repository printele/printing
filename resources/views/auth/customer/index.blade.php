@extends('master')

@section('contents')
    <section class="clearfix">
        <div class="container-fluid">
            <div class="row">
                {{--<div class="loader">Loading...</div>--}}
                <div class="container">
                    <div class="col-lg-8 step">
                        <div class="row" id="products">
                            <div class="step-header">
                                <span class="step-number">1.</span> Select a Product
                            </div>
                            <div class="slick-slider">
                                @foreach($products as $product)
                                    <div class="media card" data-id="{{$product->id}}">
                                        <figure class="media-middle">
                                            <img src="{{url($image = $product->image_path)}}" alt="Client's Logo"
                                                 class="img-responsive">
                                        </figure>
                                        <div class="media-body">
                                            <h3 class="media-heading text-center">
                                                {{$product->name}}
                                            </h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="row" id="options" style="display: none;">
                            <div class="step-header">
                                <span class="step-number">2.</span> Select options
                            </div>
                            <div class="slick-slider">
                                <div class="col-md-4">
                                    <h4>Format</h4>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="format" id="inputID" value="" checked="checked">
                                            A4
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="format" id="inputID" value="" checked="checked">
                                            A5
                                        </label>
                                    </div>


                                </div>
                                <div class="col-md-4">
                                    <h4>Print</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="print" id="inputID" value="" checked="checked">
                                            Front
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="print" id="inputID" value="" checked="checked">
                                            Front and Black
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="print" id="inputID" value="" checked="checked">
                                            Black
                                        </label>
                                    </div>



                                </div>
                                <div class="col-md-4">
                                    <h4>Paper</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="paper" id="inputID" value="" checked="checked">
                                            Gloss Coated
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="paper" id="inputID" value="" checked="checked">
                                            Coated Mattle
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-3 col-lg-offset-1 clearfix">
                        <form id="summary">
                            <legend class="text-center">
                                Order Summary
                            </legend>
                            <div>
                                <img src="{{url($image)}}" alt="" class="img-responsive" id="selected-img"
                                     style="margin: 0 auto;">
                            </div>
                            <ul style="list-style: none;padding: 0;margin: 0;" id="list">
                                <li>
                                    <span class="option">Format:</span>
                                </li>
                                <li>
                                    <span class="option">Print:</span>
                                </li>
                                <li>
                                    <span class="option">Paper:</span>
                                </li>
                                <li>
                                    <span class="option">Quantity:</span>
                                </li>
                            </ul>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="sample" id="">
                                    Sample Print
                                </label>
                            </div>
                            <div class="clearfix">
                                <button href="" class="btn btn-primary flat-ui btn-block">
                                    Confirm Order
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>

        $(document).ready(function () {
            $('.slick-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: true,
            });
            /*$('.slide-for').slick({
             slidesToShow: 1,
             slidesToScroll: 1,
             arrows: false,
             asNavFor: '.slick-slider'
             });*/

            $('.slick-slider .card').on('click', function () {
                $this = $(this);
                var id = $(this).data('id');
                var src = $(this).find('figure img').attr('src');
                console.log();
                $('#selected-img').load().attr('src', src);
                $.get(baseUrl + 'customer/product/' + id, null, process);
                function process(data) {
                    $this.parent('#products').next().fadeIn(200);
                    $.each(data, function (index, value) {
                        console.log(index);
                        if (index == "format") {
                            console.log(value);
                            var formats;
                        }
                    });
                }
            });

            $('.navigation').on('click', function (e) {
                e.preventDefault();
                $this = $(this);
                var id = $this.attr('id');
                if (id == 'next') {

                    next();
                }
                else {
                    prev();
                }
            });


        });

    </script>

@endsection