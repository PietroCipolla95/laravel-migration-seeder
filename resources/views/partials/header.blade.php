<header>


    <nav class="navbar navbar-expand navbar-light py-5 border-bottom border-5 border-black bg-info">
        <h1 class="ps-5">
            Trenoolean
        </h1>
        <div class="nav navbar-nav ps-5 fs-5">
            <a class="nav-item nav-link {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}"
                href="{{ route('welcome') }}">Home</a>
            <a class="nav-item nav-link {{ Route::currentRouteName() === 'today' ? 'active' : '' }}"
                href="{{ route('today') }}">Today Trains</a>
        </div>
    </nav>

</header>
