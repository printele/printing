@extends('master')

@section('contents')


    <section class="clearfix">
        <div class="container" style="padding-top: 10px;">
            <div id="slider">
                <img src="{{url('images/slider3.jpg')}}" alt="" class="img-responsive">
            </div>
        </div>
    </section>

    @if($products->count() !== 0)
        <section class="clearfix" style="padding-top: 20px">
            <div class="container" style="padding: 20px">
                <h2 class="page-header m-page-header">
                    Products
                </h2>

                <div class="col-lg-12">
                    <div class="slick-slider">
                        @foreach($products as $product)
                            <div class="media card">
                                <figure class="media-middle">
                                    <img src="{{url($product->image_path)}}" alt="Client's Logo"
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

                {{--<div class="mt-element-step">
                    <div class="row step-line">

                        <div class="col-md-2 mt-step-col first">
                            <div class="mt-step-number bg-white">1</div>
                            <div class="mt-step-title text-uppercase font-grey-scale">

                            </div>
                            <div class="mt-step-content font-grey-scale">
                                select a service
                            </div>
                        </div>

                        <div class="col-md-2 mt-step-col second">
                            <div class="mt-step-number bg-white">2</div>
                            <div class="mt-step-title text-uppercase font-grey-scale">

                            </div>
                            <div class="mt-step-content font-grey-scale">
                                upload files
                            </div>
                        </div>

                        <div class="col-md-2 mt-step-col second">
                            <div class="mt-step-number bg-white">3</div>
                            <div class="mt-step-title text-uppercase font-grey-scale">

                            </div>
                            <div class="mt-step-content font-grey-scale">
                                add guidelines
                            </div>
                        </div>

                        <div class="col-md-2 mt-step-col last">
                            <div class="mt-step-number bg-white">4</div>
                            <div class="mt-step-title text-uppercase font-grey-scale">

                            </div>
                            <div class="mt-step-content font-grey-scale">
                                order confirmation
                            </div>
                        </div>

                        <div class="col-md-2 mt-step-col last">
                            <div class="mt-step-number bg-white">5</div>
                            <div class="mt-step-title text-uppercase font-grey-scale">

                            </div>
                            <div class="mt-step-content font-grey-scale">
                                check out
                            </div>
                        </div>

                    </div>
                </div>--}}
            </div>
        </section>
    @endif

    {{-- Delivery Gallery --}}
    @if($gallery->count() !== 0)
        <section class="clearfix">
            <div class="container" style="padding: 20px;">
                <h2 class="page-header m-page-header">
                    Delivery Gallery
                </h2>
                @foreach($gallery as $item)
                    <div class="col-md-6">
                        <iframe width="100%"
                                src="{{$item->url}}"
                                height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <h3 class="page-header text-center">
                            {{$item->name}}
                        </h3>

                        <p>
                            {{$item->description}}
                        </p>
                        <span>Customer Name:</span>
                    </div>

                @endforeach
            </div>
        </section>
    @endif

    {{-- Our promises --}}
    @if($promises->count() !== 0)
        <section class="clearfix">

            <div class="container">
                <h2 class="page-header m-page-header">
                    Our Promise
                </h2>
                <?php $counter = 0; ?>
                @foreach($promises as $promise)
                    {{--@for($i = 1; $i < $promises->count(); $i++)--}}
                    @if($counter == 0)
                        <div class="row">
                            @endif
                            <div class="col-lg-3 col-md-3">
                                <div class="media">
                                    <figure class="media-middle">
                                        <img class="media-object" src="{{url($promise->image_path)}}"
                                             alt="{{$promise->title}}">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            {{$promise->title}}
                                        </h4>

                                        <p>
                                            {{$promise->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php $counter++; ?>
                            @if($counter == 4)
                        </div>
                        <?php $counter = 0; ?>
                    @endif
                    {{-- @endfor--}}
                @endforeach

            </div>

        </section>

    @endif


@endsection

@section('footers')

@section('scripts')
    <script type="text/javascript">
        //Dropzone.autoDiscover = false;

        Dropzone.options.orderform = { // The camelized version of the ID of the form element

            // The configuration we've talked about above
            autoProcessQueue: false,
            addRemoveLinks: true,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFiles: 100,

            // The setting up of the dropzone
            init: function () {
                var myDropzone = this;

                // First change the button to actually tell Dropzone to process the queue.
                this.element.querySelector("button[type=submit]").addEventListener("click", function (e) {
                    // Make sure that the form isn't actually being sent.
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });

                // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                // of the sending event because uploadMultiple is set to true.
                this.on("sendingmultiple", function () {
                    // Gets triggered when the form is actually being sent.
                    // Hide the success button or the complete form.
                });
                this.on("successmultiple", function (files, response) {
                    // Gets triggered when the files have successfully been sent.
                    // Redirect user or notify of success.
                });
                this.on("errormultiple", function (files, response) {
                    // Gets triggered when there was an error sending the files.
                    // Maybe show form again, and notify user of error
                });
            }

        }

        $(document).ready(function () {
            $('.slick-slider').slick({
                slidesToShow: 7,
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

        function next() {

            if ($('#orderform .form-section-active').index() <= 2) {
                var current_section = $('.form-section-active');
                //Removing the active class and adding the hidden class
                current_section.removeClass('form-section-active').addClass('form-section-hidden');
                //Adding the active class to the next form section
                current_section.next().addClass('form-section-active');
            } else {
                $('#next').hide();
                $('button[type="submit"]').show();
            }

        }
        function prev() {

            if ($('#orderform .form-section-active').index() >= 1) {
                var current_section = $('.form-section-active');
                //Removing the active class and adding the hidden class
                current_section.removeClass('form-section-active').addClass('form-section-hidden');
                //Adding the active class to the next form section
                current_section.prev().addClass('form-section-active');
            } else {
                $('#prev').hide();
            }
        }

    </script>
@endsection