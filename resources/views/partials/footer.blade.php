<section class="clearfix">
    <div class="container">
        @if($clients->count() !== 0)
            <h2 class="page-header m-page-header text-capitalize">
                our clients
            </h2>

            <div class="clearfix">

                <?php $counter = 0; ?>
                @foreach($clients as $client)
                    {{--@for($i = 1; $i < $promises->count(); $i++)--}}
                    @if($counter == 0)
                        <div class="row">
                            @endif
                            <div class="col-lg-3 col-md-3">
                                <a href="{{$client->url}}" class="media" target="_blank">
                                    <figure class="media-middle">
                                        <img class="media-object" src="{{url($client->logo)}}"
                                             alt="{{$client->name}}'s logo">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            {{$client->name}}
                                        </h4>

                                        {{--<p>
                                            {{$promise->description}}
                                        </p>--}}
                                    </div>
                                </a>
                            </div>
                            <?php $counter++; ?>
                            @if($counter == 4)
                        </div>
                        <?php $counter = 0; ?>
                    @endif
                    {{-- @endfor--}}
                @endforeach
            </div>

        @endif

        <h2 class="page-header m-page-header text-capitalize">
            our location
        </h2>

        <div class="map">
            <iframe src="https://www.google.com/maps/d/u/2/embed?mid=zChcCq3yUiWI.kyK9bgaIn_gI"></iframe>
        </div>

    </div>
</section>
