<header class="shadow">
    <div class="ms-bg-accent" id="header_top">
        <div class="container">
            <ul class="list-unstyled d-flex justify-content-end align-items-center gap-3 text-white py-1">
                <li>
                    <a class="text-uppercase">dc power visa
                        <i class="fa-regular fa-registered" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="pointer">
                    <a class="text-uppercase">additional dc sites
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="header_bottom">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container">
                <a href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" class="m-2" height="64"
                        alt="DC Logo" />
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end align-items-center" id="header-navbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item {{ Route::currentRouteName() === 'character' ? 'active active-page' : '' }}">
                            <a class="nav-link" href="">Character</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'comics' ? 'active active-page' : '' }}">
                            <a class="nav-link" href="{{ route('comics') }}">Comics</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'movies' ? 'active active-page' : '' }}">
                            <a class="nav-link" href="">Movies</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'tv' ? 'active active-page' : '' }}">
                            <a class="nav-link" href="">TV</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'games' ? 'active active-page' : '' }}">
                            <a class="nav-link" href="">Games</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'collectibles' ? 'active active-page' : '' }}">
                            <a class="nav-link" href="">Collectibles</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'videos' ? 'active active-page' : '' }}">
                            <a class="nav-link" href="">Videos</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'fans' ? 'active active-page' : '' }}">
                            <a class="nav-link" href="">Fans</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'news' ? 'active active-page' : '' }}">
                            <a class="nav-link" href="">News</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId"
                                data-bs-toggle="dropdown">Shop</a>
                            <div class="dropdown-menu rounded-0 border-0 shadow">
                                <a class="dropdown-item" href="#">Lorem</a>
                                <a class="dropdown-item" href="#">Ipsum</a>
                            </div>
                        </li>
                    </ul>
                    <div class="ms-3 align-self-center">
                        <form class="input-group" id="search-bar">
                            <input class="form-control border-0 border-bottom rounded-0 text-end" type="text"
                                placeholder="Search">
                            <button class="btn border-0 border-bottom rounded-0 my-2 my-sm-0" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

    </div>
</header>
