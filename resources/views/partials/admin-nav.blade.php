<header style="{{url()->current() == route('login') ? '-webkit-box-shadow: 3px 3px 3px #000;-moz-box-shadow: 3px 3px 10px #111;box-shadow: 3px 3px 3px #000;' : ''}}">
    <div class="container">
        <nav class="navbar" role="navigation" style="margin-bottom: 0">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('superAdmin')}}"
                   style="background-image: url('{{url('images/logo.png')}}');">Printele</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Super Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->


        </nav>
    </div>
    <div class="clearfix" style="background-color: #194a9e;">
        <div class="container">
            <div class="navbar" style="margin-bottom: 0">
                <div class="container-fluid">
                    <ul class="nav navbar-nav admin-nav">
                        <li><a href="#">Dashboard</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('products')}}">All</a></li>
                                <li><a href="{{route('new-product')}}">New</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clients <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('clients')}}">All</a></li>
                                <li><a href="{{route('new-client')}}">New</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Delivery Gallery <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('gallery')}}">All</a></li>
                                <li><a href="{{route('new-item')}}">New</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Promises <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('promises')}}">All</a></li>
                                <li><a href="{{route('new-promise')}}">New</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>