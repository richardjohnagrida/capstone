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
                        <a href="index.html" class="logo">
                            {{-- <!-- <img src="assets/images/logo.png" alt=""> --> --}}
                            <h1>GAME</h1>
                        </a>
                        {{-- <!-- ***** Logo End ***** -->
                        <!-- ***** Search End ***** --> --}}
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        {{-- <!-- ***** Search End ***** -->
                        <!-- ***** Menu Start ***** --> --}}
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="browse.html" class="active">Games</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            {{-- <!-- <li><a href="details.html">Details</a></li> -->
                            <!-- <li><a href="streams.html">Streams</a></li> --> --}}
                            <li><a href="profile.html">Profile <img
                                        src="https://scontent.fcrk3-2.fna.fbcdn.net/v/t1.6435-1/45748365_309911219843090_315947870287036416_n.jpg?stp=dst-jpg_p200x200&_nc_cat=101&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeEMySJgpcj6eF2Yhimv4FAMMdhVni963Q8x2FWeL3rdDwhEX964XhGYl82YnsyMBLY0biDXI5RIeTmOZ2qXClL3&_nc_ohc=WIcp9GzzQ-UAX8U9s--&_nc_ht=scontent.fcrk3-2.fna&oh=00_AfANb-hpDD7OFXt0toYvCTIc1Z5tvI-HMePNdeo9JxdJAw&oe=639FECDF"
                                        alt="" /></a></li>
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
                    <div class="row">
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
                    </div>
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
                                            <img src="assets/images/service-01.jpg" alt=""
                                                style="max-width: 60px; border-radius: 50%;">
                                        </div>
                                        <h4>Go To Your Profile</h4>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus veniam
                                            fuga,
                                            repellat
                                            aspernatur suscipit fugit, quo earum magni rem, molestias quasi at rerum.
                                            Nesciunt obcaecati quas
                                            vel explicabo, est qui?</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="item">
                                        <div class="icon">
                                            <img src="assets/images/service-02.jpg" alt=""
                                                style="max-width: 60px; border-radius: 50%;">
                                        </div>
                                        <h4>Live Stream Button</h4>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                            veniam fuga,
                                            repellat
                                            aspernatur suscipit fugit, quo earum magni rem, molestias quasi at rerum.
                                            Nesciunt obcaecati
                                            quas
                                            vel explicabo, est qui?</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="item">
                                        <div class="icon">
                                            <img src="assets/images/service-03.jpg" alt=""
                                                style="max-width: 60px; border-radius: 50%;">
                                        </div>
                                        <h4>You Are Live</h4>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus veniam
                                            fuga,
                                            repellat
                                            aspernatur suscipit fugit, quo earum magni rem, molestias quasi at rerum.
                                            Nesciunt obcaecati
                                            quas
                                            vel explicabo, est qui?</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <a href="profile.html">Go To Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <!-- ***** Rent Step End ***** --> --}}

                    {{-- <!-- ***** List of Games Start ***** --> --}}
                    <div class="live-stream text-left" id="most-popular-game">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Most Popular</em> Games</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="assets/images/stream-01.jpg" alt="">
                                        <div class="hover-effect">
                                            <div class="content">
                                                <div class="live">
                                                    <a href="#">Add to Cart</a>
                                                </div>
                                                <ul>
                                                    {{-- <!-- <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li> -->
                                                    <!-- <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li> --> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="down-content">
                                        {{-- <!-- <div class="avatar">
                      <img src="assets/images/avatar-01.jpg" alt=""
                        style="max-width: 46px; border-radius: 50%; float: left;">
                    </div> -->
                                        <!-- <span><i class="fa fa-check"></i> KenganC</span> --> --}}
                                        <h5>Game name</h5>
                                    </div>
                                </div>
                            </div>

                            {{-- <!-- <div class="col-lg-12">
                <div class="main-button">
                  <a href="streams.html">Discover All Streams</a>
                </div>
              </div> --> --}}
                        </div>
                    </div>
                    {{-- <!-- ***** List of Game End ***** --> --}}

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/userJS.js"></script>
    {{-- <!-- <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script> --> --}}
</body>

</html>
