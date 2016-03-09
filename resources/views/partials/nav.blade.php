<header style="{{url()->current() == route('login') ? '-webkit-box-shadow: 3px 3px 3px #000;-moz-box-shadow: 3px 3px 10px #111;box-shadow: 3px 3px 3px #000;' : ''}}">
    <div class="container">
        <nav class="navbar" role="navigation" style="margin-bottom: 0">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('home')}}"
                   style="background-image: url('{{url('images/logo.png')}}');">Printele</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            @if(url()->current() !== route('login') && !Auth::check())
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="btn btn-default btn-sm" href="{{route('login')}}">
                                Login / Register
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            @endif

            @if(Auth::check())
                <div class="clearfix">
                    <div class="pull-right">
                        <p class="text-right">Welcome</p>
                        <p class="text-right">{{Auth::user()->name}}</p>
                        <p class="text-right">
                            {!! link_to_route('logout', 'Logout', null, ['class' => 'btn btn-default btn-sm']) !!}
                        </p>
                    </div>
                </div>

            @endif

        </nav>
    </div>
    @if(url()->current() !== route('login'))
        <div class="clearfix" style="background-color: #194a9e;">
            <div class="container">
                <div class="navbar" style="margin-bottom: 0">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav pull-right" id="snav">
                            <li>
                                <a id="cart">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span> 0 items </span>
                                    <span class="caret"></span>
                                </a>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Send</th>
                                            <th>SubTotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <a href="#">Products</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

</header>