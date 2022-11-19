<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Games</title>
</head>

<body>

    <div class="container">
        {{-- SIDEBAR --}}
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/images/carbon_game-console.png" alt="">
                    <h2>GA<span class="danger">ME</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>
            <div class="sidebar">
                <a href="admin_dashboard">
                    <span class="material-icons-sharp">
                        dashboard_customize
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="members">
                    <span class="material-icons-sharp">
                        person
                    </span>
                    <h3>Members</h3>
                </a>
                <a href="add_games" class="active">
                    <span class="material-icons-sharp">
                        sports_esports
                    </span>
                    <h3>Games</h3>
                </a>
                <a href="">
                    <span class="material-icons-sharp">
                        list_alt
                    </span>
                    <h3>Orders</h3>
                </a>
                <a href="">
                    <span class="material-icons-sharp">
                        edit_note
                    </span>
                    <h3>Create Order</h3>
                </a>
                <a href="">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        {{-- <!-- START OF MAIN --> --}}
        <main>

            <div class="member search">
                <h2>Games</h2>
                <form action="" class="search-bar">
                    <input type="text" placeholder="Search" name="">
                    <button type="submit"><span class="material-icons-sharp">
                            search
                        </span></button>
                </form>
            </div>
            <div class="add-game">
                <a href="#modal-add-game" class="link-1" id="modal-closed">Add game</a>
            </div>
            <div class="modal-container" id="modal-add-game">
                <div class="modal-add-game">
                    <form action="add_games" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2>Add Game</h2>
                        <label>Game name</label>
                        <input type="text" name="name">
                        <label>Genre</label>
                        {{-- <input type="text" name="genre"><br> --}}
                        <div class="select-genre">
                            <select name="genre">
                                <option value="RPG">RPG</option>
                                <option value="MMORPG">MMORPG</option>
                                <option value="Strategy">Strategy</option>
                                <option value="Sports">Sports</option>
                                <option value="Sports">Simulation</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Adventure">Puzzle</option>
                            </select>
                        </div>
                        <label>Console</label>
                        <div class="select-console">
                            <select name="console">
                                @foreach ($platforms as $platform)
                                    <option value="{{ $platform->console_id }}">
                                        {{ $platform->console_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <label>Price per week</label>
                        <input type="number" name="week"><br>
                        <label>Price per month</label>
                        <input type="number" name="month"><br>
                        <label>Total Quantity</label>
                        <input type="number" name="qty"><br>
                        <label>Description</label>
                        <input type="text" name="description"><br>
                        <label for="submit-cover">Cover</label>
                        <input type="file" name="cover" id="submit-cover" placeholder="Choose file">
                        <button type="submit" class="modal__btn submit-game">Submit &rarr;</button>
                    </form>
                    <a href="#modal-closed" class="link-2"></a>
                </div>
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
                                <a href="#modal-update-game" class="link-1" id="modal-closed">Update</a>
                            </td>
                        </tr>
                        <div class="modal-container" id="modal-update-game">
                            <div class="modal-game">
                                <form action="add_games" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h2>Add Game</h2>
                                    <label>Game name</label>
                                    <input type="text" name="name">
                                    <label>Genre</label>
                                    {{-- <input type="text" name="genre"><br> --}}
                                    <div class="select-genre">
                                        <select name="genre">
                                            <option value="RPG">RPG</option>
                                            <option value="MMORPG">MMORPG</option>
                                            <option value="Strategy">Strategy</option>
                                            <option value="Sports">Sports</option>
                                            <option value="Sports">Simulation</option>
                                            <option value="Adventure">Adventure</option>
                                            <option value="Adventure">Puzzle</option>
                                        </select>
                                    </div>
                                    <label>Console</label>
                                    <div class="select-console">
                                        <select name="console">
                                            @foreach ($platforms as $platform)
                                                <option value="{{ $platform->console_id }}">
                                                    {{ $platform->console_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <label>Price per week</label>
                                    <input type="number" name="week"><br>
                                    <label>Price per month</label>
                                    <input type="number" name="month"><br>
                                    <label>Total Quantity</label>
                                    <input type="number" name="qty"><br>
                                    <label>Description</label>
                                    <input type="text" name="description"><br>
                                    <label for="submit-cover">Cover</label>
                                    <input type="file" name="cover" id="submit-cover"
                                        placeholder="Choose file">
                                    <button type="submit" class="modal__btn submit-game">Submit &rarr;</button>
                                </form>
                                <a href="#modal-closed" class="link-2"></a>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
            <div class="page-container">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>

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
            <div class="filtering">
                <h2>Filter</h2>
                <div class="filters">
                    <div class="filter">
                        <label for="">Console</label>
                    </div>
                </div>
            </div>
            <!-- END OF FILTERING -->
        </div>
        <script src="/js/index.js"></script>
</body>

</html>
