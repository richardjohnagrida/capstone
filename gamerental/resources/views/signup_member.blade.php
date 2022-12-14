<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/userHead')
    <title>Signup</title>
</head>
<style>

</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="page-content signup-form">
                    <!-- ***** Banner Start ***** -->
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
                    </div> -->
                    <!-- ***** Banner End ***** -->
                    @include('layouts/logo')

                    <!-- ***** Most Popular Start ***** -->
                    <div class="live-stream  signup" id="most-popular-game">
                        <div class="col-lg-12 ">
                            <div class="heading-section">
                                <!-- <h4><em>Most Popular</em> Games</h4> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 ">
                                <form action="/signup_member" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h2>Signup</h2>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <label>First name</label>
                                            <input type="text" name="fname" required>
                                            <label>Last name</label>
                                            <input type="text" name="lname" required>
                                            <label>Password</label>
                                            <input type="password" name="password" required>
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirmPass" required>
                                            <label>Contact Number</label>
                                            <input type="text" name="contact" required>
                                            <label>Date of Birth</label>
                                            <input type="date" name="dob" required>
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Email</label>
                                            <input type="text" name="email" required>
                                            <label>Address</label>
                                            <input type="text" name="address" required>
                                            <label>Upload governement ID:</label>
                                            <input type="file" name="id" required>
                                            <label>Upload Proof of Billing:</label>
                                            <input type="file" name="proof" required>
                                            <label>Upload profile photo:</label>
                                            <input type="file" name="profile" accept="{{ $allowed_img_format }}" required>
                                            <button class="sign_btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="streams.html">Discover All Streams</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->
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
                    <!-- ***** Gaming Library End ***** -->
                </div>
            </div>
        </div>
    </div>

    <footer>

    </footer>

    {{-- <!-- Scripts -->
    <!-- Bootstrap core JavaScript --> --}}
    {{-- <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script> --}}
    {{-- <script src="/js/userJS.js"></script> --}}
    <script src="/js/isotope.min.js"></script>
    <script src="/js/owl-carousel.js"></script>
    <script src="/js/tabs.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/custom.js"></script>
</body>

</html>
