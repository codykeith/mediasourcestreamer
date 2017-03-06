<header>
    <div class="logo">Media Source Streamer</div>
    <nav>
        <ul>
            @if (Auth::check())
            <li>{{Auth::user()->name}}</li>
            <li><a href="/home">Home</a></li>
            <li><a href="/players">Players</a></li>
            <li><a href="/account">Account</a></li>
            @endif
            <li><a href="/support">Support</a></li>
            @if (Auth::check())
            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout">Logout</a></li>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            @endif
        </ul>
    </nav>
    <div class="clear"></div>
</header>