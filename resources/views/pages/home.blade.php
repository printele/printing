@extends('master')

@section('contents')


    <section class="clearfix">
        <div class="container" style="padding-top: 0;">
            <div id="slider">
                <img src="{{url('images/slider3.jpg')}}" alt="" class="img-responsive">
            </div>
        </div>
    </section>

    <section class="clearfix" style="padding-top: 20px">
        <div class="container" style="padding-left: 100px">
            <div class="mt-element-step">
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
            </div>
        </div>
        <div class="container" style="padding-left: 100px">

        </div>
    </section>



    {{-- Delivery Gallery --}}
    <section class="clearfix">
        <div class="container" style="padding: 20px;">
            <h2 class="page-header m-page-header">
                Delivery Gallery
            </h2>

            <div class="col-md-6">
                <iframe width="100%" src="https://www.youtube.com/embed/xo1VInw-SKc?list=PL7JgdmQ0zTfatnGhUnRBnhMwYEraSIRdD" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="page-header text-center">TruValue Properties Flyers</h3>
                <p>Description of work, order time and delivery, date and other specifications</p>
                <span>Customer Name:</span>
            </div>

        </div>
    </section>

    {{-- Our promises --}}
    <section class="clearfix">

        <div class="container">
            <h2 class="page-header m-page-header">
                Our Promise
            </h2>

            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="media">
                        <figure class="media-middle">
                            <img class="media-object" src="{{url('images/best_value.png')}}" alt="Best Value">
                        </figure>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Best Value On Bulk Printing
                            </h4>

                            <p>
                                Get more value on money spent for all your advertising and marketing needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="media">
                        <figure class="media-middle">
                            <img class="media-object" src="{{url('images/free_and_fast_delivery.png')}}"
                                 alt="Free And Fast Delivery">
                        </figure>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Time Saving
                            </h4>

                            <p>
                                We understand why you can't wait to get your print items shipped to you as fast as YOU
                                want
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="media">
                        <figure class="media-middle">
                            <img class="media-object" src="{{url('images/time_saving.png')}}" alt="Time Saving">
                        </figure>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Free and Fast Delivery
                            </h4>

                            <p>
                                Our free courier service would deliver to you doorstep in no time.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="media">
                        <figure class="media-middle">
                            <img class="media-object" src="{{url('images/professional_services.png')}}"
                                 alt="Professional Services">
                        </figure>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Professional Services
                            </h4>

                            <p>All our works are made and handled by professionals</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>


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