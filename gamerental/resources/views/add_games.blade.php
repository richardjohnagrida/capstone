<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Games</title>
</head>

<body>

    <div class="container">
        {{-- SIDEBAR --}}
        @include('layouts/aside')

        {{-- <!-- START OF MAIN --> --}}
        <main>

            <div class="member search">
                <h1>Member</h1>
                <form action="" class="search-bar">
                    <input type="text" placeholder="Search" name="">
                    <button type="submit"><span class="material-icons-sharp">
                            search
                        </span></button>
                </form>
            </div>

            <div class="recent-renter member">
                <table>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ate jo</td>
                            <td>Jan lang</td>
                            <td>09091234567</td>
                            <td>atejo@gmail.com</td>
                            <td class="success" style="color: rgb(3, 199, 3);">Active</td>
                            <td class="primary">
                                <a href="#modal-opened" class="gamelink-1" id="modal-closed">Update</a>
                            </td>
                        </tr>
                        <div class="modal-container" id="modal-opened">
                            <div class="modal">
                                <form action="add_games" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h2>Add Game</h2>
                                    <label>Game name</label>
                                    <input type="text" name="name"><br>
                                    <label>Genre</label>
                                    {{-- <input type="text" name="genre"><br> --}}
                                    <select name="genre">
                                        <option value="RPG">RPG</option>
                                        <option value="MMORPG">MMORPG</option>
                                        <option value="Strategy">Strategy</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Sports">Simulation</option>
                                        <option value="Adventure">Adventure</option>
                                        <option value="Adventure">Puzzle</option>
                                    </select>
                                    <label>Console</label>
                                    
                                    <select name="console">
                                        @foreach ($platforms as $platform)
                                            <option value="{{ $platform->console_id }}">{{ $platform->console_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <label>Price per week</label>
                                    <input type="number" name="week"><br>
                                    <label>Price per month</label>
                                    <input type="number" name="month"><br>
                                    <label>Total Quantity</label>
                                    <input type="number" name="qty"><br>
                                    <label>Description</label>
                                    <input type="text" name="description"><br>
                                    <label>Cover</label>
                                    <input type="file" name="cover">
                                    <button type="submit" class="modal__btn submit-game">Submit</button>
                                </form>
                                <a href="#modal-closed" class="gamelink-2"></a>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
            <div class="page-container">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>

            <h1>Games</h1>

        </main>
        {{-- <!-- END OF MAIN --> --}}

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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

            <!-- START OF FILTERING -->
            <div class="Due-Today">
                <h2>Due Today</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-6/292629531_3183988248535102_7139051683664337622_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGr3YEIOWfMfx1OIspeP6wIiKWwg7fpSceIpbCDt-lJx6WFojSUD7G_CFE93yAN7V_A1D-90Bmaaa3C825D-KtI&_nc_ohc=htKVaXCkJnoAX_vAoRx&_nc_zt=23&_nc_ht=scontent.fmnl3-4.fna&oh=00_AfDrfy-km54MZk4UxClhjovRczLvQz23grGY6znCBceHCg&oe=63788E25"
                                alt="">
                        </div>
                        <div class="message">
                            <p><b>Ceejay</b> 01-02-2022</p>
                            <small class="text-muted">2 Minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-6/292629531_3183988248535102_7139051683664337622_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGr3YEIOWfMfx1OIspeP6wIiKWwg7fpSceIpbCDt-lJx6WFojSUD7G_CFE93yAN7V_A1D-90Bmaaa3C825D-KtI&_nc_ohc=htKVaXCkJnoAX_vAoRx&_nc_zt=23&_nc_ht=scontent.fmnl3-4.fna&oh=00_AfDrfy-km54MZk4UxClhjovRczLvQz23grGY6znCBceHCg&oe=63788E25"
                                alt="">
                        </div>
                        <div class="message">
                            <p><b>Ceejay</b> 01-03-2022</p>
                            <small class="text-muted">3 Minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-6/292629531_3183988248535102_7139051683664337622_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGr3YEIOWfMfx1OIspeP6wIiKWwg7fpSceIpbCDt-lJx6WFojSUD7G_CFE93yAN7V_A1D-90Bmaaa3C825D-KtI&_nc_ohc=htKVaXCkJnoAX_vAoRx&_nc_zt=23&_nc_ht=scontent.fmnl3-4.fna&oh=00_AfDrfy-km54MZk4UxClhjovRczLvQz23grGY6znCBceHCg&oe=63788E25"
                                alt="">
                        </div>
                        <div class="message">
                            <p><b>Ceejay</b> 01-03-2022</p>
                            <small class="text-muted">4 Minutes ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF FILTERING -->
        </div>
        <script src="/js/index.js"></script>



</body>

</html>
