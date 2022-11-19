<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/heads')
    <title>Profile</title>
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
    <!-- ***** Preloader End ***** --> --}}

    {{-- <!-- ***** Header Area Start ***** --> --}}
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
                                    <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                    <i class="fa fa-search"></i>
                                </form>
                                </div> -->
                        <!-- ***** Search End ***** -->
                        <!-- ***** Menu Start ***** --> --}}
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="games.html">Browse</a></li>
                            {{-- <!-- <li><a href="details.html">Details</a></li> -->
                            <!-- <li><a href="streams.html">Streams</a></li> --> --}}
                            <li><a href="profile.html" class="active">Profile <img
                                        src="https://scontent.fcrk3-2.fna.fbcdn.net/v/t1.6435-1/45748365_309911219843090_315947870287036416_n.jpg?stp=dst-jpg_p200x200&_nc_cat=101&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeEMySJgpcj6eF2Yhimv4FAMMdhVni963Q8x2FWeL3rdDwhEX964XhGYl82YnsyMBLY0biDXI5RIeTmOZ2qXClL3&_nc_ohc=WIcp9GzzQ-UAX8U9s--&_nc_ht=scontent.fcrk3-2.fna&oh=00_AfANb-hpDD7OFXt0toYvCTIc1Z5tvI-HMePNdeo9JxdJAw&oe=639FECDF"
                                        alt="" /></a>
                            </li>
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

                    {{-- <!-- ***** Banner Start ***** --> --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-profile">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="https://scontent.fcrk3-2.fna.fbcdn.net/v/t1.6435-1/45748365_309911219843090_315947870287036416_n.jpg?stp=dst-jpg_p200x200&_nc_cat=101&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeEMySJgpcj6eF2Yhimv4FAMMdhVni963Q8x2FWeL3rdDwhEX964XhGYl82YnsyMBLY0biDXI5RIeTmOZ2qXClL3&_nc_ohc=WIcp9GzzQ-UAX8U9s--&_nc_ht=scontent.fcrk3-2.fna&oh=00_AfANb-hpDD7OFXt0toYvCTIc1Z5tvI-HMePNdeo9JxdJAw&oe=639FECDF"
                                            alt="" style="border-radius: 23px;" />
                                    </div>

                                    <div class="col-lg-4 align-self-center">
                                        <div class="main-info header-text">
                                            <div>
                                                <label for="upload" class="changeprofile">Change Profile
                                                    Picture</label>
                                                <input type="file" id="upload" style="display: none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                    <path
                                                        d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                                                </svg><i class="bi bi-image"></i>
                                            </div>
                                            <h4>Ate jo</h4>
                                            <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
                                            <div class="main-border-button">
                                                <a href="games.html">View More Games</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 align-self-center">
                                        <ul>
                                            <li>Status <span>Active</span></li>
                                            <li>Total Games Rented <span>3</span></li>
                                            <li>Recent Game <span>Barbie</span></li>
                                            <li>None<span>None</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <!-- ***** Banner End ***** --> --}}

                    {{-- <!-- ***** Gaming Library Start ***** --> --}}
                    <div class="gaming-library">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Your Gaming</em> Library</h4>
                            </div>
                            <div class="row ">
                                <div class="col-lg-12">
                                    <div class="item">
                                        <ul>
                                            <li>
                                                <img src="assets/images/game-01.jpg" alt=""
                                                    class="templatemo-item" />
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
                                                {{-- <!-- <div class="main-border-button border-no-active">
                                                <a href="#">Rented</a>
                                                </div> --> --}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <!-- <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.html">View Your Library</a>
              </div>
            </div> --> --}}
                    </div>
                    {{-- <!-- ***** Gaming Library End ***** --> --}}
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

                        <br>Design: <a href="https://templatemo.com" target="_blank"
                            title="free CSS templates">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    {{-- <!-- Scripts -->
    <!-- Bootstrap core JavaScript --> --}}
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    {{-- <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script> --}}
</body>

</html>
