<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
</head>
<title>Members</title>

<body>
    <div class="container">
        {{-- SIDEBAR --}}
        @include('layouts/aside')

        @include('layouts/right')
        {{-- <!-- START OF MAIN --> --}}
        <main>
            @include('layouts/memberRenter')
        </main>
        {{-- <!-- END OF MAIN --> --}}
        @include('layouts/forApproval')
    </div>
</body>
