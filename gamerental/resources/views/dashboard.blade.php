<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
</head>
<title>Dashboard</title>

<body>
    <div class="container">
        {{-- SIDEBAR --}}
        @include('layouts/aside')

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
