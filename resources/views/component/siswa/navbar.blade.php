<header class="l-header">
    <div class="l-header__inner clearfix">
        <div class="c-header-icon js-hamburger" style="border-left: 0; border-right: 1px solid #ccc;">
            <div class="hamburger-toggle">
                <span class="bar-top"></span>
                <span class="bar-mid"></span>
                <span class="bar-bot"></span>
            </div>
        </div>

        <div class="c-header-icon lol logo" style="border-left: 0; border-right: 1px solid #fff;">
            <img src="../img/smkn1.png" width="35">
        </div>

        <div class="c-title">
            <h1>@yield('title')</h1>
        </div>

        <div class="c-search"></div>

        <ul class="navbar-nav ms-auto p-0">
            <!-- Authentication Links -->
            <li class="nav-item dropdown px-3">
                <a id="navbarDropdown" class="name-tag nav-link dropdown-toggle c-header-icon userDropdown me-2"
                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    v-pre>
                    <!-- <i class='bx bxs-user-circle'></i> -->
                    <div class="text-small d-inline-flex ms-1 ">{{ $nama }}</div>
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

        <div class="none c-header-icon-hp">
            <i class='bx bx-menu-alt-right' id="btn"></i>
        </div>

    </div>
</header>

<input type="checkbox" id="checki" class="ch">
<ul class="hp-ul" for=checki style="z-index: 1;">
    <li class="{{ request()->is('home*') ? 'active' : '' }} hp-li" title="Dashboard">
        <a href="/home">
            <i class='bx bxs-grid-alt'></i>
            Home
        </a>
    </li>
    <li class="{{ request()->is('histori-skor*') ? 'active' : '' }} hp-li" title="Histori Skor">
        <a href="histori-skor">
            <i class="fas fa-calendar-alt"></i>
            Histori Skor
        </a>
    </li>
    <li class="{{ request()->is('penanganan*') ? 'active' : '' }} hp-li" title="Penanganan">
        <a href="/penanganan">
            <i class="fas fa-user-cog"></i>
            Penanganan
        </a>
    </li>
    <li class="{{ request()->is('tata-tertib*') ? 'active' : '' }} hp-li" title="Tata Tertib">
        <a href="/tata-tertib">
            <i class="fas fa-chalkboard-teacher"></i>
            Tata Tertib
        </a>
    </li>
    <li class="{{ request()->is('kontak-sekolah*') ? 'active' : '' }} hp-li" title="Kontak Sekolah">
        <a href="/kontak-sekolah">
            <i class="fas fa-phone"></i>
            Kontak Sekolah
        </a>
    </li>
    <!-- <li class="{{ request()->is('faq*') ? 'active' : '' }} hp-li" title="FAQ">
        <a href="/faq">
            <i class="fas fa-comments"></i>
            FAQ
        </a>
    </li> -->
</ul>
