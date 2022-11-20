<h1>Dashboard</h1>
<div class="insights">
    <div class="rent">
        <span class="material-icons-sharp">
            query_stats
        </span>
        <div class="middle">
            <div class="left">
                <h3>Current Profit</h3>
                <!-- TODO data-val should be connected to the database -->

                @foreach ($profits as $profit)
                    <h1> &#8369<b class="num" data-val={{ $profit->total_amount }}></b></h1>
                @endforeach

                @foreach ($months as $month)
                    <p> &#8369<b class="num" data-val={{ $month->months }}></b> </>
                @endforeach
            </div>
            <div class="progress">
                <!-- <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg> -->
                <div class="number">
                    <p>81%</p>
                </div>
            </div>
        </div>
        <small class="text-muted">Last 24 hours</small>
    </div>
    <!-- end of rent -->
    <div class="ren">
        <span class="material-icons-sharp">
            bar_chart
        </span>
        <div class="middle">
            <div class="left">
                <h3>Number of Rentals</h3>
                @foreach ($rents as $rent)
                    <h1><small>Daily Rentals</small> <b class="num" data-val={{ $rent->rents }}> </b> </>
                @endforeach
                @foreach ($monthlyRents as $monthlyRent)
                    <h1><small>Monthly Rentals</small> {{ $monthlyRent->mrents }} </>
                @endforeach
            </div>
            <div class="progress">
                <!-- <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg> -->
                <div class="number">
                    <p>81%</p>
                </div>
            </div>
        </div>
        <small class="text-muted">Last 24 hours</small>
    </div>
    <!-- end of ren -->
    <div class="re">
        <span class="material-icons-sharp">
            stacked_bar_chart
        </span>
        <div class="middle">
            <div class="left">
                <h3>Total Re</h3>
                <h1>$<b class="num" data-val="1000">000</b></h1>
            </div>
            <div class="progress">
                <!-- <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg> -->
                <div class="number">
                    <p>81%</p>
                </div>
            </div>
        </div>
        <small class="text-muted">Last 24 hours</small>
    </div>
    <!-- end of re-->
</div>
<!-- end of insight -->
