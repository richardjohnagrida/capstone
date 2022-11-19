<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
</head>
<title>Members</title>

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
                <a href="dashboard">
                    <span class="material-icons-sharp">
                        dashboard_customize
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="members" class="active">
                    <span class="material-icons-sharp">
                        person
                    </span>
                    <h3>Members</h3>
                </a>
                <a href="add_games">
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
                                <a href="#modal-opened" class="link-1" id="modal-closed">Update</a>
                            </td>
                        </tr>
                        <div class="modal-container" id="modal-opened">
                            <div class="modal">
                                <form action="" class="modal-info">
                                    <h1 class="member-info" style="margin:10px 0px 20px 0px;">Member Info</h1>
                                    <label for="" placeholder="CustomerName">Customer Name</label>
                                    <input type="text">
                                    <label for="">Active rentals</label>
                                    <input type="text" disabled>
                                    <label for="">Contact info</label>
                                    <input type="text">
                                    <label for="">Address</label>
                                    <input type="text">
                                    <label for="">Status</label>
                                    <div class="select">
                                        <select name="" id="">
                                            <option value="active">Active
                                            </option>
                                            <option value="deactive">Deactive</option>
                                        </select><br><br>
                                        <button type="submit" class="modal__btn archive-btn">Archive</button>
                                        <button type="submit" class="modal__btn update-btn">Update &rarr;</button>
                                    </div>
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
                    <a href="#">1</a>
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
        {{-- START OF RIGHT CONTENT --}}
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
            {{-- ENG OF TOP RIGHT --}}

            {{-- START OF RIGHT APPROVAL --}}
            <div class="Due-Today">
                <h2>For Approval</h2>
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
                </div>
            </div>
        </div>
        {{-- END OF RIGHT APPROVAL --}}
        {{-- END OF RIGHT CONTENT --}}
    </div>
</body>
