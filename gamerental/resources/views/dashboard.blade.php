<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
</head>
<title>Dashboard</title>

<body>
    <div class="container">
        {{-- SIDEBAR --}}
        <aside>
            <div class="top">
                <div class="logo">
                    {{-- <img src="/images/carbon_game-console.png" alt="">
                    <h2>GA<span class="danger">ME</span> </h2> --}}
                    @include('layouts/logo')
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>
            <div class="sidebar">
                <a href="" class="active">
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
                <a href="#modal-add-admin" class="link-1" id="modal-closed"><span class="material-icons-sharp">
                        edit_note
                    </span>
                    <h3>Create Admin</h3>
                </a>

                <a href="/">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <div class="modal-container" id="modal-add-admin">
            <div class="modal-add-admin">
                <form action="add_games" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('layouts/logo')
                    <br>
                    <h2>Add Admin</h2>
                    <br>
                    <label>First Name</label>
                    <input type="email" name="">
                    <label>Last Name</label>
                    <input type="text" name="">
                    <br>
                    <label>Password</label>
                    <input type="text" name="">
                    <br>
                    <label>Email</label>
                    <input type="text" name="">
                 
                    {{-- <label>Status</label>
                    <div class="select-admin-active">
                        <select name="genre">
                            <option value="">Active</option>
                            <option value="">Deactive</option>
                        </select>
                    </div> --}}

                    <br>
                    <button type="submit" class="modal__btn submit-game">Create &rarr;</button>
                </form>
                <a href="#modal-closed" class="link-2"></a>
            </div>
        </div>
        {{-- <!-- START OF MAIN --> --}}
        <main>
            @include('layouts/insight')
            @include('layouts/renter')
        </main>
        {{-- <!-- END OF MAIN --> --}}

        @include('layouts/right')
    </div>
    <script src="/js/index.js"></script>
</body>
