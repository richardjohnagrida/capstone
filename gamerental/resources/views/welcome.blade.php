<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/userHead')
    <title>WELCOME</title>
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
                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="/gamelist">games</a></li>

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
                </div>
            </div>
        </div>
    </header>
    {{-- <!-- ***** Header Area End ***** --> --}}

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    {{-- <!-- ***** Banner Start ***** --> --}}
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="header-text">
                                    <h6>Welcome to The Console</h6>
                                    <h4><em>Browse</em> Our Popular Games Here</h4>
                                    <div class="main-button">
                                        <a href="/gamelist">Browse Now</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="images/carousel1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/carousel2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/carousel3" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** --> --}}
                    <div class="live-stream text-left" id="most-popular-game">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Most Popular</em> Games</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="/images/nba.jpg" alt="profile" class="profile-photo"
                                        style="width:100%"><br>
                                    <h6 style="text-align:center">NBA2K23</span></h6>
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="/images/GOT.jpg" alt="profile" class="profile-photo"
                                        style="width:100%">
                                    <h6 style="text-align:center">Ghost of Tsushima</span></h6>

                                    <ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="/images/GOW.jpg" alt="profile" class="profile-photo"
                                        style="width:100%">
                                    <h6 style="text-align:center">God of War:Ragnarok</span></h6>
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="/images/elden ring.jpg" alt="profile" class="profile-photo"
                                        style="width:100%">
                                    <h6 style="text-align:center">Elden Ring</span></h6>
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- <!-- ***** Most Popular End ***** -->
                    <!-- ***** About Start ***** --> --}}
            <div class="most-popular text-center mb-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="heading-section text-center">
                            <h4>New Games</h4>
                        </div>
                        <div class="row">
                            @foreach ($games as $game)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="item">
                                        <img src="{{ url('images/' . $game->cover_img) }}" alt="profile"
                                            class="profile-photo" style="width:100%">
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
    </div>
    {{-- <!-- ***** About End ***** -->
                    <!-- ***** Gaming Library Start ***** -->
                    <!-- <div class="gaming-library">
                        <div class="col-lg-12">
                        <div class="heading-section">
                            <h4><em>Your Gaming</em> Library</h4>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12">
                            <div class="item">
                                <ul>
                                <li>
                                    <img src="assets/images/game-01.jpg" alt="" class="templatemo-item" />
                                </li>
                                <li>
                                    <h4>Dota 2</h4>
                                    <span>Sandbox</span>
                                </li>
                                <li>
                                    <h4>Rented Date</h4>
                                    <span>24/08/2036</span>
                                </li>
                                <li>
                                    <h4>Rent Due</h4>
                                    <span>24/08/2036</span>
                                </li>
                                <li>
                                    <h4>Console</h4>
                                    <span>PS5</span>
                                </li>
                                <li>
                                    <h4>Currently</h4>
                                    <span>Rented</span>
                                </li>
                                <li>
                                    <div class="main-border-button border-no-active">
                                <a href="#">Rented</a>
                                </div>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>

                    <div class="col-lg-12">
                        <div class="main-button">
                            <a href="profile.html">View Your Library</a>
                        </div>
                        </div>
                    </div> -->
                    <!-- ***** Gaming Library End ***** --> --}}
    </div>
    </div>
    </div>
    </div>

    {{-- <!-- <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>
            Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights
            reserved.

            <br />Design:
            <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>
          </p>
        </div>
      </div>
    </div> --> --}}

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
    <script src="/js/isotope.min.js"></script>
    <script src="/js/owl-carousel.js"></script>
    <script src="/js/tabs.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/custom.js"></script>
</body>

</html>
