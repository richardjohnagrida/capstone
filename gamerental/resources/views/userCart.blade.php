<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/userhead')
    <title>My Cart</title>

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
    @if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
            <p class="text-green-800">{{ $message }}</p>
        </div>
    @endif
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
                            <li><a href="/profile">Home</a></li>
                            <li><a href="/shop">games</a></li>
                            <li><a href="/cart" class="active">Cart</a></li>
                            <li><a href="/"><span class="material-icons-sharp">
                                        logout
                                    </span></a></li>
                            {{-- <!-- <li><a href="details.html">Details</a></li> -->
                            <!-- <li><a href="streams.html">Streams</a></li> --> --}}
                            <li>
                                <a href="profile.html">Profile <img
                                        src="{{ url('images/' . Session::get('img_profile')) }}" alt="profile"
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
                    {{-- <!-- ***** Banner Start ***** -->
                    <!-- <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Welcome To GAME</h6>
                                    <h4><em>Browse</em> Our Popular Games Here</h4>
                                    <div class="main-button">
                                        <a href="games.html">Browse Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --> --}}
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="heading-section">
                                <h4><em>My</em> Cart</h4>
                            </div>
                        </div>
                    </div>
                    {{-- <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** --> --}}
                    <div class="most-popular most-cart">
                        <div class="row" id='cart-item-container'>
                            <label for="sel" class="selectall" style="color:#00a2ff;">Select All</label>
                            <input type="checkbox" class="selectall" id="sel" style="display: none" />

                            <div class='col cart-item' template='template' style='display:none;'>

                                <div class="col-lg-12 ">
                                    <div class="item cart">
                                        <input type="checkbox" class="individual"
                                            style="float: left;margin-bottom: 10px;" />
                                        <img class='game-img' style="height:350px" alt="" />
                                        <h3 class='game-name'>Game Name</h3>
                                        {{-- <h5 class='console-type'>Console type</h5> --}}
                                    </div>
                                </div>

                                <div class="col-lg-5 game-info">
                                    <span class='price'></span>

                                </div>
                            </div>
                        </div>


                        <div class="row game-rentout">
                            <form action='/checkout' id='checkout' method='POST'>
                                @csrf;

                                <input type='hidden' name='total_amount' value='0' />
                                <input type='number' name='number_of_weeks' placeholder="Number of weeks"
                                    style="margin: 30px 0px" /><br>
                                <span style="color:#fff">Total Price ₱ <label style="margin-bottom: 0px"
                                        class='lbl-total-amount'></label></span><br>
                                <label for="pick-up">Pickup</label>
                                <input type='radio' name='delivery_type' id="pick-up" value='pickup' />
                                <label for="lalamove">Lalamove / Grab</label>
                                <input type='radio' name='delivery_type' id="lalamove" value='courier' />
                                <button class="rentout_btn" type='submit' id='rent-out'>Rent Out</button>

                                <button class="remove_btn">Remove</button>
                                <div class="col-lg-2 col-6">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                {{-- <!-- ***** Most Popular End ***** -->
                <!-- ***** About Start ***** -->
                <!-- <div class="most-popular text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section text-center">
                                    <h4>About</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="https://scontent.fcrk3-2.fna.fbcdn.net/v/t1.6435-1/45748365_309911219843090_315947870287036416_n.jpg?stp=dst-jpg_p200x200&_nc_cat=101&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeEMySJgpcj6eF2Yhimv4FAMMdhVni963Q8x2FWeL3rdDwhEX964XhGYl82YnsyMBLY0biDXI5RIeTmOZ2qXClL3&_nc_ohc=WIcp9GzzQ-UAX8U9s--&_nc_ht=scontent.fcrk3-2.fna&oh=00_AfANb-hpDD7OFXt0toYvCTIc1Z5tvI-HMePNdeo9JxdJAw&oe=639FECDF"
                                                alt="" />
                                            <h4>Ate Jo<br /><span>Back-End</span></h4>
                                            <ul>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="https://scontent.fcrk3-2.fna.fbcdn.net/v/t1.6435-1/45748365_309911219843090_315947870287036416_n.jpg?stp=dst-jpg_p200x200&_nc_cat=101&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeEMySJgpcj6eF2Yhimv4FAMMdhVni963Q8x2FWeL3rdDwhEX964XhGYl82YnsyMBLY0biDXI5RIeTmOZ2qXClL3&_nc_ohc=WIcp9GzzQ-UAX8U9s--&_nc_ht=scontent.fcrk3-2.fna&oh=00_AfANb-hpDD7OFXt0toYvCTIc1Z5tvI-HMePNdeo9JxdJAw&oe=639FECDF"
                                                alt="" />
                                            <h4>ate jo<br /><span>Back-End</span></h4>
                                            <ul>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="https://scontent.fcrk3-2.fna.fbcdn.net/v/t1.6435-1/45748365_309911219843090_315947870287036416_n.jpg?stp=dst-jpg_p200x200&_nc_cat=101&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeEMySJgpcj6eF2Yhimv4FAMMdhVni963Q8x2FWeL3rdDwhEX964XhGYl82YnsyMBLY0biDXI5RIeTmOZ2qXClL3&_nc_ohc=WIcp9GzzQ-UAX8U9s--&_nc_ht=scontent.fcrk3-2.fna&oh=00_AfANb-hpDD7OFXt0toYvCTIc1Z5tvI-HMePNdeo9JxdJAw&oe=639FECDF"
                                                alt="" />
                                            <h4>ate jo<br /><span>Back-End</span></h4>
                                            <ul>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="https://scontent.fcrk3-2.fna.fbcdn.net/v/t1.6435-1/45748365_309911219843090_315947870287036416_n.jpg?stp=dst-jpg_p200x200&_nc_cat=101&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeEMySJgpcj6eF2Yhimv4FAMMdhVni963Q8x2FWeL3rdDwhEX964XhGYl82YnsyMBLY0biDXI5RIeTmOZ2qXClL3&_nc_ohc=WIcp9GzzQ-UAX8U9s--&_nc_ht=scontent.fcrk3-2.fna&oh=00_AfANb-hpDD7OFXt0toYvCTIc1Z5tvI-HMePNdeo9JxdJAw&oe=639FECDF"
                                                alt="" />
                                            <h4>ate jo<br /><span>Back-End</span></h4>
                                            <ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- ***** About End ***** -->
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
