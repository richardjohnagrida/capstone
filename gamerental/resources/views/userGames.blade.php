<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/userHead')
    <title>Games</title>
</head>

<body>

    {{-- <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
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
                        <!-- ***** Search End ***** --> --}}
                        {{-- <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div> --}}
                        {{-- <!-- ***** Search End ***** -->
                        <!-- ***** Menu Start ***** --> --}}
                        <ul class="nav">
                            <li><a href="/profile">Home</a></li>
                            <li><a href="/shop" class="active">Games</a></li>
                            <li><a href="/cart">Cart</a></li>
                            <li><a href="/"><span class="material-icons-sharp">
                                        logout
                                    </span></a></li>
                            {{-- <!-- <li><a href="details.html">Details</a></li> -->
                            <!-- <li><a href="streams.html">Streams</a></li> --> --}}
                            <li><a href="profile.html">Profile <img
                                        src="{{ url('images/' . Session::get('img_profile')) }}" alt="profile"
                                        class="profile-photo"></a></li>
                        </ul>
                        <a class='menu-trigger'>
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

                    {{-- <!-- ***** Featured Games Start ***** --> --}}
                    {{-- <div class="row">
                        <div class="col-lg-8">
                            <div class="featured-games header-text">
                                <div class="heading-section">
                                    <h4><em>Featured</em> Games</h4>
                                </div>
                                <div class="owl-features owl-carousel">
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="assets/images/featured-01.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>2.4K Rented</h6>
                                            </div>
                                        </div>
                                        <h4>Barbie<br><span>249K Rented</span></h4>
                                        <ul>
                                            <li><i class="fa fa-star"></i> 4.8</li>
                                            <li><i class="fa fa-heart"></i> 2.3M</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="top-downloaded">
                                <div class="heading-section">
                                    <h4><em>Top</em> Rented</h4>
                                </div>
                                <ul>
                                    <li>
                                        <img src="assets/images/game-01.jpg" alt="" class="templatemo-item">
                                        <h4>Fortnite</h4>
                                        <h6>Sandbox</h6>
                                        <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                                        <span><i class="fa fa-heart" style="color: #00a2ff;"></i> 2.2M</span>

                                    </li>
                                </ul>
                                <div class="text-button">
                                    <a href="#most-popular-game">View All Games</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <!-- ***** Featured Games End ***** --> --}}

                    {{-- <!-- ***** Rent Step Start ***** --> --}}
                    <div class="start-stream">
                        <div class="col-lg-12 text-center">
                            <div class="heading-section">
                                <h4><em>How To Rent</em> Games</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="item">
                                        <div class="icon">
                                            {{-- <img src="assets/images/service-01.jpg" alt=""
                                                style="max-width: 60px; border-radius: 50%;"> --}}
                                        </div>
                                        <h4>Add to Cart</h4>
                                        <p>Choose from wide variety of games and click the "Add to Cart" button</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="item">
                                        <div class="icon">
                                            {{-- <img src="assets/images/service-02.jpg" alt=""
                                                style="max-width: 60px; border-radius: 50%;"> --}}
                                        </div>
                                        <h4>Rent Out</h4>
                                        <p>Upon selecting, go to CART to review the games before pressing rent out</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="item">
                                        <div class="icon">
                                            {{-- <img src="assets/images/service-03.jpg" alt=""
                                                style="max-width: 60px; border-radius: 50%;"> --}}
                                        </div>
                                        <h4>Wait for Aprroval</h4>
                                        <p> Kindly wait for our call from one of our staff to confirm your order and
                                            delivery</p>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12">
                                    <div class="main-button">
                                        <a href="profile.html">Go To Profile</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <!-- ***** Rent Step End ***** --> --}}

                    {{-- <!-- ***** List of Games Start ***** --> --}}
                    <div class="live-stream text-left" id="most-popular-game">
                        <div class="col-lg-12">
                            <div class="heading-section" style="margin-bottom: 30px;">
                                <h4><em>Most Popular</em> Games</h4>

                                <form action="/shop" method="POST">
                                    @csrf
                                    <input type="text" placeholder="Search game tittle" id='searchText'
                                        name="search" onkeypress="handle" />
                                    <i class="fa fa-search"></i>
                                </form>
                                <a href="/shop" class="show-all">Show all </a>

                                {{-- <form action="/shop" method="POST">
                                    @csrf
                                    <select name="console">
                                        @foreach ($platforms as $platform)
                                            <option value=""> Console</option>
                                            <option value="{{ $platform->console_name }}">{{ $platform->console_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <select name="genre">
                                        <option value="">Genre</option>
                                        <option value="RPG">RPG</option>
                                        <option value="MMORPG">MMORPG</option>
                                        <option value="Strategy">Strategy</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Sports">Simulation</option>
                                        <option value="Adventure">Adventure</option>
                                        <option value="Adventure">Puzzle</option>
                                    </select>

                                    <button type="submit">submit</button> --}}

                                <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            {{-- @foreach ($games as $game)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="item">
                                        <div class="thumb game-card">

                                            <img src="{{ url('images/' . $game->cover_img) }}"alt="cover">
                                            <input type='hidden' value="{{ json_encode($game) }}" name='game_info' />
                                            <input name="name" value="{{ $game->name }}" hidden />
                                            <button type="submit" class='add-to-cart'>Add to Cart</button>
                                            <button type="submit" class='remove-to-cart' style='display:none'>Remove to
                                                Cart</button>

                                        </div>
                                        <div class="down-content">
                                            <h5>{{ $game->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach --}}


                            @foreach ($games as $game)
                                <div class="col-lg-3 mb-3 col-sm-6 d-flex align-items-stretch">
                                    <div class="card thumb game-card  d-flex flex-column"
                                        style="background: #1f2122; border:none;">
                                        <img src="{{ url('images/' . $game->cover_img) }}"
                                            style="height:350px"alt="cover" class="card-img-top">
                                        <input type='hidden' value="{{ json_encode($game) }}" name='game_info' />
                                        <input name="name" value="{{ $game->name }}" hidden />
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">{{ $game->name }}</h5>


                                        </div>
                                        <button type="submit" class='add-to-cart'>Add to Cart</button>
                                        <button type="submit" class='remove-to-cart' style='display:none'>Remove to
                                            Cart</button>
                                    </div>
                                </div>
                            @endforeach

                            <div class="page-container-member">
                                <div class="pagination">
                                    <a href="?page=1">&laquo;</a>
                                    @for ($x = 1; $x <= $pages; $x++)
                                        <a href="?page={{ $x }}"
                                            class="
                                        @if ($activePage == $x) active @endif
                                         ">
                                            {{ $x }}</a>
                                    @endfor
                                    <a href="?page={{ $pages }}">&raquo;</a>
                                </div>
                            </div>
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
            {{-- <script src="/js/userJS.js"></script> --}}
            {{-- <script src="/js/isotope.min.js"></script>
        <script src="/js/owl-carousel.js"></script>
        <script src="/js/tabs.js"></script>
        <script src="/js/popup.js"></script>
        <script src="/js/custom.js"></script> --}}
</body>

</html>
