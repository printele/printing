@extends('master')

@section('contents')
    <section class="clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="loader">Loading...</div>
                <div class="container">
                    <div class="col-lg-8">
                        <!-- TAB NAVIGATION -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab1" role="tab" data-toggle="tab">New</a></li>
                            <li class="pull-right"><a href="#tab2" role="tab" data-toggle="tab">Transactions</a></li>
                        </ul>
                        <!-- TAB CONTENT -->
                        <div class="tab-content">
                            <div class="active tab-pane fade in" id="tab1">
                                <div class="clearfix">
                                    <div class="step">
                                        <span>1</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="slick-slider">
                                            <div class="text-center">
                                                <img src="{{url('images/slider3.jpg')}}" class="img-responsive" height="300px">
                                            </div>
                                            <div class="text-center">Posters</div>
                                            <div class="text-center">Business Cards</div>
                                            <div class="text-center">T-Shirt</div>
                                            <div class="text-center">Brochures</div>
                                            <div class="text-center">Bags</div>
                                            <div class="text-center">Banners</div>
                                            <div class="text-center">Invitation Cards</div>
                                            <div class="text-center">Paper bags</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <h2>Tab2</h2>

                                <p>Lorem ipsum.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        summary
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
                slidesToScroll: 1,
                arrows: true,
            });
            /*$('.slide-for').slick({
             slidesToShow: 1,
             slidesToScroll: 1,
             arrows: false,
             asNavFor: '.slick-slider'
             });*/

            $('.slick-slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
                console.log(slick);
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