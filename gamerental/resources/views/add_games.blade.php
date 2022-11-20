<!DOCTYPE html>
<html lang="en">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
                <form action="add_games" class="search-bar">
                    <input type="text" placeholder="Search" name="search">
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
                            <th>Platform</th>
                            <th>Tittle</th>
                            <th>Genre</th>
                            <th>Available Stock</th>
                            <th>Waiting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            @foreach ($games as $game)
                        <tr>
                            <td>{{ $game->console_name }}</td>
                            <td>{{ $game->name }}</td>
                            <td>{{ $game->genre }}</td>
                            <td>{{ $game->qty_on_hand }}</td>
                            <td>{{ $game->waiting_qty }}</td>

                            <td class="primary"> <a href="#update/{{ $game->game_id }}" class="link-1"
                                    id="modal-closed">Update</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @foreach ($games as $game)
                    <div class="modal-container" id="update/{{ $game->game_id }}">
                        <div class="modal-game">
                            <p>{{ $game->game_id }}</p>
                            <form action="{{ route('games.update', ['id' => $game->game_id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h2>Update Game</h2>
                                <label>Game name</label>
                                <input type="text" name="name" value="{{ $game->name }}">
                                <label>Genre</label>
                                {{-- <input type="text" name="genre"><br> --}}
                                <div class="select-genre">
                                    <select name="genre">
                                        <option value="RPG">{{ $game->genre }}</option>
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
                                        <option value="RPG">{{ $game->console_name }}</option>

                                        @foreach ($platforms as $platform)
                                            <option value="{{ $platform->console_id }}">
                                                {{ $platform->console_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <label>Price per week</label>
                                <input type="number" name="week" value="{{ $game->price_per_week }}"><br>
                                <label>Price per month</label>
                                <input type="number" name="month" value="{{ $game->price_per_month }}"><br>
                                <label>Total Quantity</label>
                                <input type="number" name="qty" value="{{ $game->total_qty }}"><br>
                                <label>Description</label>
                                <input type="text" name="description" value="{{ $game->description }}"><br>
                                <label for="submit-cover">Cover</label>
                                <input type="file" name="cover" id="submit-cover" placeholder="Choose file">
                                <button type="submit" class="modal__btn submit-game">Submit &rarr;</button>

                            </form>
                            <a href="#modal-closed" class="link-2"></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="page-container">
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

        </main>
        <!-- RIGHT START OF -->
        <div class="right">
            {{-- START OF TOP RIGHT --}}
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
            <!-- END OF RIGHT TOP -->

            <!--START OF RIGHT FILTERING -->
            <div class="filtering">
                <h2>Filter</h2>
                <div class="filters">
                    <div class="filter">
                        <form action="search" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Console</label>
                            <div class="select-console">
                                <select name="fconsole">

                                    @foreach ($platforms as $platform)
                                        <option value="{{ $platform->console_id }}">
                                            {{ $platform->console_name }}
                                        </option>
                                    @endforeach
                                </select>
                                <label>Genre</label><br>
                                <select name="fgenre">
                                    <option value=""></option>
                                    <option value="RPG">RPG</option>
                                    <option value="MMORPG">MMORPG</option>
                                    <option value="Strategy">Strategy</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Sports">Simulation</option>
                                    <option value="Adventure">Adventure</option>
                                    <option value="Adventure">Puzzle</option>
                                </select><br>
                                <button type="submit">Filter</button>
                        </form>

                    </div>
                </div>
                <!-- END OF RIGHT FILTERING -->
            </div>
            {{-- <!-- END OF MAIN --> --}}
        </div>
        <script src="/js/index.js"></script>
</body>

</html>
