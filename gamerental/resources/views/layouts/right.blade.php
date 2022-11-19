<div class="right">
    <div class="top">
        <button id="menu-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_13)">
                    <path d="M12 24H-6V20H12V24ZM30 14H-6V10H30V14ZM30 4H12V0H30V4Z" fill="black" />
                </g>
                <defs>
                    <clipPath id="clip0_1_13">
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </button>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">
                wb_sunny
            </span>
            <span class="material-icons-sharp">
                dark_mode
            </span>
        </div>
        <div class="profile">
            <div class="info">
                <p>Hi, <b>Ceejay</b></p>
                <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
                <img src="https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-6/292629531_3183988248535102_7139051683664337622_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGr3YEIOWfMfx1OIspeP6wIiKWwg7fpSceIpbCDt-lJx6WFojSUD7G_CFE93yAN7V_A1D-90Bmaaa3C825D-KtI&_nc_ohc=htKVaXCkJnoAX_vAoRx&_nc_zt=23&_nc_ht=scontent.fmnl3-4.fna&oh=00_AfDrfy-km54MZk4UxClhjovRczLvQz23grGY6znCBceHCg&oe=63788E25"
                    alt="">
            </div>
        </div>
    </div>
    <!-- ENF OF TOP -->

    <!-- START OF DUE TODAY -->
    <div class="Due-Today">
        <h2>Due Today</h2>
        <div class="updates">
            <div class="update">
                @foreach ($dues as $due)
                    <div class="profile-photo">
                        <img src="{{ url('images/' . $due->img_profile) }}" alt="profile">
                    </div>

                    <div class="message">
                        <p><b>{{ $due->first_name }}</b> Order ID: {{ $due->order_id }}</p>
                        <small class="text-muted">details</small>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- END OF DUE TODAY -->


    <div class="rent-analytics">
        <h2>Rent Analytics</h2>
        <div class="item ps5">
            <div class="icon">
                <span class="material-icons-sharp">
                    videogame_asset
                </span>
            </div>
            <div class="right">
                <div class="info">
                    <h3>PS5</h3>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="success">+<b class="success num" data-val="100">00</b>%</h5>
            </div>
        </div>
        <div class="item ps4">
            <div class="icon">
                <span class="material-icons-sharp">
                    videogame_asset
                </span>
            </div>
            <div class="right">
                <div class="info">
                    <h3>PS4</h3>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="success">+<b class="success num" data-val="100">00</b>%</h5>
            </div>
        </div>
        <div class="item ps3">
            <div class="icon">
                <span class="material-icons-sharp">
                    videogame_asset
                </span>
            </div>
            <div class="right">
                <div class="info">
                    <h3>PS3</h3>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="success">+<b class="success num" data-val="100">00</b>%</h5>
            </div>
        </div>
        <!-- <div class="item add">
            <div>
                <span class="material-icons-sharp">
                    add
                </span>
                <h3>Add Analytics</h3>
            </div>
        </div> -->
    </div>
</div>
