<header class="l-header">
    <div class="l-header__inner clearfix">
        <div class="c-header-icon js-hamburger">
            <div class="hamburger-toggle">
                <span class="bar-top"></span>
                <span class="bar-mid"></span>
                <span class="bar-bot"></span>
            </div>
        </div>

        <div class="none c-header-icon-hp">
            <i class='bx bx-menu-alt-left' id="btn"></i>

        </div>

        <div class="c-title">
            <h1>Title</h1>
        </div>

        <div class="c-search"></div>

        <ul class="navbar-nav ms-auto p-0">
            <!-- Authentication Links -->
            <li class="nav-item dropdown px-3">
                <a id="navbarDropdown" class="nav-link dropdown-toggle c-header-icon userDropdown mx-4" href="#"
                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class='bx bxs-user-circle'></i>
                    <div class="text-small text-secondary d-inline-flex ms-1">{{ $nama }}</div>
                </a>

                <div class="dropdown-menu dropdown-menu-end me-2" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>

<input type="checkbox" id="checki" class="ch">
<ul class="hp-ul" for=checki style="z-index: 1;">
    <li class="{{ Request::is('/home') ? 'active' : '' }} hp-li" data-toggle="tooltip" title="Dashboard">
        <a href="/home">
            <i class='bx bxs-grid-alt'></i>
            <!-- Dashboard -->
        </a>
    </li>
    <li class="{{ Request::is('/histori-skor') ? 'active' : '' }} hp-li" data-toggle="tooltip" title="Histori Skor">
        <a href="/histori-skor">
            <i class="fas fa-calendar-alt"></i>
            <!-- Histori Skor -->
        </a>
    </li>
    {{-- <li class="{{ Request::is('/penanganan') ? 'active' : '' }} hp-li" data-toggle="tooltip" title="Penanganan">
        <a href="/penanganan">
            <i class="fas fa-user-cog"></i>
            <!-- Penanganan -->
        </a>
    </li>
    <li class="{{ Request::is('/tata-tertib') ? 'active' : '' }} hp-li" data-toggle="tooltip" title="Tata Tertib">
        <a href="/tata-tertib">
            <i class="fas fa-chalkboard-teacher"></i>
            <!-- Tata Tertib -->
        </a>
    </li>
    <li class="{{ Request::is('/kontak-sekolah') ? 'active' : '' }} hp-li" data-toggle="tooltip" title="Kontak Sekolah">
        <a href="/kontak-sekolah">
            <i class="fas fa-phone"></i>
            <!-- Kontak Sekolah -->
        </a>
    </li>
    <li class="{{ Request::is('/faq') ? 'active' : '' }} hp-li" data-toggle="tooltip" title="FAQ">
        <a href="/faq">
            <i class="fas fa-comments"></i>
            <!-- FAQ -->
        </a>
    </li> --}}
</ul>
