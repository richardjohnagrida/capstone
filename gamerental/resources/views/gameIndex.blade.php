<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/userHead')

    <title>Games</title>
</head>

<body style="background-image: url('images/background.png'); background-repeat: no-repeat;background-size: cover">

    {{-- <!-- ***** Preloader Start ***** -->
    <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** --> --}}
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        {{-- <!-- ***** Logo Start ***** --> --}}
                        <a href="/" class="logo">
                            @include('layouts/logo')
                        </a>
                        {{-- <!-- ***** Logo End ***** -->

                        <!-- ***** Search End ***** -->
                        <!-- <div class="search-input">
                                <form id="search" action="#">
                                    <input type="text" placeholder="Type Something" id="searchText" name="searchKeyword"
                                    onkeypress="handle" />
                                    <i class="fa fa-search"></i>
                                </form>
                            </div> -->
                        <!-- ***** Search End ***** -->

                        <!-- ***** Menu Start ***** --> --}}
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="/gamelist" class="active">games</a></li>

                            {{-- <!-- <li><a href="cart.html">Cart</a></li> -->
                            <!-- <li><a href="details.html">Details</a></li> -->
                            <!-- <li><a href="streams.html">Streams</a></li> --> --}}
                            <li>
                                <a href="#myModal" id="myBtn">Login <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/800px-Default_pfp.svg.png"
                                        alt=""></a>

                            </li>
                        </ul>
                        {{-- <button>Open Modal</button> --}}

                        {{-- START MODAL CONTENT HERE --}}
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <div>
                                    <span class="close">
                                        &times;
                                    </span>

                                </div>
                                @include('layouts/logo')

                                <h1>Login</h1>

                                <form action="profile" method="POST">
                                    @csrf

                                    <label for="">Email</label>
                                    <input type="text" name="email" id=""><br>
                                    <label for="">Password</label>
                                    <input type="password" name="password"><br>
                                    <button type="submit" class="login_btn">Login</button>
                                    <a href="/signup" class="signup_btn">Signup</a>
                                </form>
                            </div>
                        </div>

                        {{-- END MODAL CONTENT HERE --}}
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        {{-- <!-- ***** Menu End ***** --> --}}
                    </nav>

    </header>


    <div class="container">
        <div class="row">

            <div class="page-content">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="most-popular text-center mb-5">
            <div class="row">

                <div class="col-lg-12 ">
                    <div class="heading-section text-center">
                        <h6 class="pb-5">PlayStation Games</h6>
                    </div>
                    <div class="row">
                        @foreach ($games as $game)
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="{{ url('images/' . $game->cover_img) }}" alt="profile"
                                        class="profile-photo"  style="height:350px" style="width:100%">
                                    <h4>{{ $game->name }}<br /><span>{{ $game->genre }}</span></h4>
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="most-popular text-center mb-5">
            <div class="row">

                <div class="col-lg-12 ">
                    <div class="heading-section text-center">
                        <h6 class="pb-5">Xbox Games</h6>
                    </div>
                    <div class="row">
                        @foreach ($xbox as $box)
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="{{ url('images/' . $box->cover_img) }}" alt="profile"
                                        class="profile-photo"  style="height:350px" style="width:100%">
                                    <h4>{{ $box->name }}<br /><span>{{ $box->genre }}</span></h4>
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="most-popular text-center mb-5">
            <div class="row">

                <div class="col-lg-12 ">
                    <div class="heading-section text-center">
                        <h6 class="pb-5">Nintendo Games</h6>
                    </div>
                    <div class="row">
                        @foreach ($nintendo as $nin)
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="{{ url('images/' . $nin->cover_img) }}" alt="profile"
                                        class="profile-photo" style="width:100%">
                                    <h4>{{ $nin->name }}<br /><span>{{ $nin->genre }}</span></h4>
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('layouts/userFooterIcons')
    <br>
    <footer class="mx-4">
        @include('layouts/userFooter')
    </footer>

    {{-- <!-- Scripts -->
    <!-- Bootstrap core JavaScript --> --}}
    {{-- <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script> --}}
    <script src="/js/userJS.js"></script>
    {{-- <script src="/js/isotope.min.js"></script>
    <script src="/js/owl-carousel.js"></script>
    <script src="/js/tabs.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/custom.js"></script> --}}
</body>

</html>
