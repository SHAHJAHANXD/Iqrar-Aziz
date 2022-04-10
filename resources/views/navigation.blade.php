<div class="logo">
    <h1><img src="{{ url('assets/img/logo.png') }}" /></h1>

</div>
<nav id="navbar" class="navbar">
    <ul>
        <li><a href="{{ route('index') }}" class="">Home</a></li>
        <li><a href="{{ url('Fileview') }}"> View PCAPs</a></li>
        <li><a href="{{ route('Logout') }}"> Logout</a></li>
            <li><a href="{{ route('index') }}" class="">Home</a></li>
            <li><a href="{{ route('social.login') }}"> Sign In</a></li>

    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
