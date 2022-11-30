<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/userHead')
    <title>Profile</title>

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
                        <a href="/profile" class="logo">
                            @include('layouts/logo')
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
                            <li><a href="/profile" class="active">Home</a></li>
                            <li><a href="/shop">games</a></li>
                            <li><a href="/cart">Cart</a></li>
                            <li><a href="/logout">Logout</a></li>

                            <li>
                                <a href="/profile">Profile
                                    <img src="{{ url('images/' . Session::get('img_profile')) }}" alt="profile"
                                        class="profile-photo"></a>
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
                                        <img src="{{ url('images/' . Session::get('img_profile')) }}" alt="profile"
                                            class="profile-photo">
                                    </div>

                                    <div class="col-lg-4 align-self-center">
                                        <div class="main-info header-text">
                                            <div>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                    <path
                                                        d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                                                </svg><i class="bi bi-image"></i>
                                            </div>
                                            <h4>{{ Session::get('first_name') }} </h4>
                                            <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
                                            <div class="main-border-button">
                                                <a href="/shop">View More Games</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 align-self-center">
                                        <ul>
                                            <li>Status <span>Active</span></li>
                                            @foreach ($rent as $totalRent)
                                                <li>Total Games Rented <span>{{ $totalRent->totalRent }}</span></li>
                                            @endforeach
                                            <li>Recent Game <span>Barbie</span></li>
                                            <li>Deliquent Rent<span>None</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <!-- ***** Banner End ***** -->

                    <!-- ***** Gaming Library Start ***** --> --}}
                    <div class="gaming-library">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Recent Rent</em> Status</h4>
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
