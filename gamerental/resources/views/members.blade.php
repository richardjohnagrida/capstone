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
                    @include('layouts/logo')
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
                <a href="orders">
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
                <a href="/">
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
                    <input type="text" placeholder="Search" name="search">
                    <button type="submit"><span class="material-icons-sharp">
                            search
                        </span></button>
                </form>
            </div>

            <div class="recent-renter member">
                <table>
                    <thead>
                        <tr>
                            <th style="float:left">Profile Picture</th>
                            <th>Customer Name</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td style="padding:0px 25px;"><img src="{{ url('images/' . $member->img_profile) }}"
                                        alt="profile" class="profile-photo"></td>
                                <td>{{ $member->last_name }}, {{ $member->first_name }}</td>
                                <td>{{ $member->contact_number }}</td>
                                <td>{{ $member->email }}</td>
                                <td class="success">Active</td>


                                <td class="primary"> <a href="#update/{{ $member->member_id }}" class="link-1"
                                        id="modal-closed">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                @foreach ($members as $member)
                    <div class="modal-container" id="update/{{ $member->member_id }}">
                        <div class="modal">
                            <form action="/members/{{ $member->member_id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <h1 class="member-info" style="margin:10px 0px 20px 0px;">Member Info</h1>
                                <label for="" placeholder="CustomerName">Customer Name</label>
                                <input type="text" value="{{ $member->first_name }} {{ $member->last_name }}"
                                    disabled>
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{ $member->email }}">
                                <label for="">Contact info</label>
                                <input type="text" name="contact" value="{{ $member->contact_number }}">
                                <label for="">Address</label>
                                <input type="text" name="address" value="{{ $member->address }}">
                                <label for="">Status</label>
                                <div class="select" value="{{ $member->status }}">
                                    <select name="status" id="">
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
                @endforeach
            </div>


            <div class="page-container-member">
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
                        <p>Hi, <b>{{ Session::get('first_name') }}</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">

                        <img src="{{ url('images/' . Session::get('img_profile')) }}" alt="profile"
                            class="profile-photo">
                    </div>
                </div>
            </div>
            {{-- ENG OF TOP RIGHT --}}

            {{-- START OF RIGHT APPROVAL --}}
            <div class="Due-Today">
                <h2>For Approval</h2>
                <div class="updates">
                    <div class="update">
                        @foreach ($pendings as $pending)
                            <div class="profile-photo">
                                <img src="{{ url('images/' . $pending->img_profile) }}" alt="profile">
                            </div>

                            <div class="message">
                                <p><b>{{ $pending->first_name }}</b> </p>
                                <p>{{ $pending->created_at }}</p>
                                <small>
                                    <a href="#approve/{{ $pending->member_id }}" class="link-1"
                                        id="modal-closed">View</a>
                                </small>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- ------APPROVE MODAL------------- --}}
        @foreach ($pendings as $pending)
            <div class="modal-container" id="approve/{{ $pending->member_id }}">
                <div class="modal">
                    <form action="/members/{{ $pending->member_id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <h1 class="member-info" style="margin:10px 0px 20px 0px;">Member Info</h1>
                        <label for="" placeholder="CustomerName">Customer Name</label>
                        <input type="text" value="{{ $pending->first_name }} {{ $pending->last_name }}" disabled>
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{ $pending->email }}">
                        <label for="">Contact info</label>
                        <input type="text" name="contact" value="{{ $pending->contact_number }}">
                        <label for="">Address</label>
                        <input type="text" name="address" value="{{ $pending->address }}">
                        <label for="">Date of Birth</label>
                        <input type="text" name="birthday" value="{{ $pending->birthday }}">
                        <label for="">Date Registered</label>
                        <input type="text" name="birthday" value="{{ $pending->created_at }}">
                        <p>Submitted Requirements</p>
                        <img src="{{ url('images/' . $pending->img_profile) }}" alt="profile" style="width:20%">
                        <img src="{{ url('images/' . $pending->img_id) }}" alt="profile" style="width:20%">
                        <img src="{{ url('images/' . $pending->img_requirements) }}" alt="profile"
                            style="width:20%">

                        <button type="submit" class="modal__btn update-btn">Approve &rarr;</button>
                    </form>

                    <a href="#modal-closed" class="link-2"></a>

                </div>
            </div>
        @endforeach

        {{-- END OF RIGHT APPROVAL --}}
        {{-- END OF RIGHT CONTENT --}}
    </div>
    <script src="/js/index.js"></script>

</body>

</html>
