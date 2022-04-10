<!DOCTYPE html>
<html lang="en">

<head>
    @include('pcap.layouts.heads')
    <title>@yield('title')</title>

</head>

<body class="crm_body_bg">
    @include('pcap.layouts.sidebar')

    @yield('content')

    @include('pcap.layouts.footer')

    @include('pcap.layouts.scripts')
</body>

</html>
