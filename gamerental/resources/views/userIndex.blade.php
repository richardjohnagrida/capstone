<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/userHead')
    <title>Welcome</title>
</head>

<body>
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
                        <a href="index.html" class="logo">
                            {{-- <!-- <img src="assets/images/logo.png" alt=""> --> --}}
                            <h1>GAME</h1>
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
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="/shop">games</a></li>
                            <li><a href="/cart">Cart</a></li>
                            <li><a href="/logout">Logout</a></li>
                            {{-- <!-- <li><a href="details.html">Details</a></li> -->
                            <!-- <li><a href="streams.html">Streams</a></li> --> --}}
                            <li>
                                <a href="/">Profile
                                    <img src="{{ url('images/' . Session::get('img_profile')) }}" alt="profile"
                                        class="profile-photo"></a>
                            </li>
                        </ul>
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
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Welcome back, {{ Session::get('first_name') }} !</h6>
                                    <h4><em>Browse</em> Our Popular Games Here</h4>
                                    <div class="main-button">
                                        <a href="/shop">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** --> --}}
                    <div class="row">
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
                    {{-- <!-- ***** Most Popular End ***** -->
                    <!-- ***** About Start ***** --> --}}
                    <div class="most-popular text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section text-center">
                                    <h6 class="pb-5">We have new games for you!</h6>
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
                {{-- <!-- ***** About End ***** -->
                    <!-- ***** Gaming Library Start ***** --> --}}
                <div class="gaming-library">
                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4><em>Recent Rent</em> Status</h4>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="item">

                                    <table style="width:90%; color:white">
                                        <thead>
                                            <tr>
                                                <th>Rent ID</th>
                                                <th>Game Tittle</th>
                                                <th>Rent Date</th>
                                                <th>Rent Due</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($rents as $rent)
                                                <tr>
                                                    <td>{{ $rent->order_id }}</td>
                                                    <td>
                                                        @foreach ($gameList as $tittle)
                                                            {{ $tittle->name }}<br>
                                                        @endforeach
                                                    </td>
                                                    <td>{{ $rent->created_at }}</td>
                                                    <td>{{ $rent->due_dates }}</td>
                                                    <td>{{ $rent->status }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                    <p style="color: white; text-align:center"> <small>For pending rent order, due
                                            date
                                            will be
                                            updated upon order approval</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="main-button">
                            <a href="/library">View Your Library</a>
                        </div>
                    </div>
                </div>
                {{-- <!-- ***** Gaming Library End ***** --> --}}
            </div>
        </div>
    </div>
    </div>

    @include('layouts/userFooterIcons')
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
