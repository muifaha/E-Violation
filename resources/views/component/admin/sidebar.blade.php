<div class="l-sidebar">
    <div class="logo">
        <img src="../img/smkn1.png" width="35" class="animate__animated animate__fadeInDown">
        <div class="text-logo animate__animated animate__fadeInLeft" style="animation-delay: 1s">
            <span>E - Book</span>
        </div>
    </div>

    <div class="l-sidebar__content">
        <nav class="c-menu js-menu">
            <ul class="u-list">

                <li class="c-menu__item {{ request()->is('home*') ? 'is-active' : '' }} has-submenu" data-toggle="tooltip"
                    title="Dashboard">
                    <a class="c-menu__item__inner" href="/home">
                        <div class="ic animate__backInLeft animate__animated">
                            <i class='bx bxs-grid-alt'></i>
                        </div>
                        <div class="c-menu-item__title animate__backInLeft animate__animated"><span>Dashboard</span></div>
                    </a>
                </li>

                <li class="c-menu__item {{ request()->is('daftar-siswa*') ? 'is-active' : '' }} has-submenu"
                    data-toggle="tooltip" title="Skor Siswa">
                    <a class="c-menu__item__inner" href="/daftar-siswa">
                        <div class="ic animate__backInLeft animate__animated">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="c-menu-item__title animate__backInLeft animate__animated"><span>Daftar Siswa</span></div>
                    </a>
                </li>

                <li class="c-menu__item {{ request()->is('guru*') ? 'is-active' : '' }} has-submenu"
                    data-toggle="tooltip" title="Histori Skor">
                    <a class="c-menu__item__inner" href="/guru/histori-skor">
                        <div class="ic animate__backInLeft animate__animated">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="c-menu-item__title animate__backInLeft animate__animated"><span>Histori Skor</span></div>
                    </a>
                </li>

                <li class="c-menu__item {{ request()->is('penanganan*') ? 'is-active' : '' }} has-submenu"
                    data-toggle="tooltip" title="Penanganan">
                    <a class="c-menu__item__inner" href="/penanganan">
                        <div class="ic animate__backInLeft animate__animated">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <div class="c-menu-item__title animate__backInLeft animate__animated"><span>Penanganan</span></div>
                    </a>
                </li>

                {{-- <li class="c-menu__item {{ request()->is('tata-tertib*') ? 'is-active' : '' }} has-submenu"
                    data-toggle="tooltip" title="Tata Tertib">
                    <a class="c-menu__item__inner" href="/tata-tertib">
                        <div class="ic animate__backInLeft animate__animated">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="c-menu-item__title animate__backInLeft animate__animated"><span>Tata Tertib</span></div>
                    </a>
                </li> --}}

                {{-- <li class="c-menu__item {{ request()->is('kontak-sekolah*') ? 'is-active' : '' }} has-submenu"
                    data-toggle="tooltip" title="Kontak Sekolah">
                    <a class="c-menu__item__inner" href="/kontak-sekolah">
                        <div class="ic animate__backInLeft animate__animated">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="c-menu-item__title animate__backInLeft animate__animated"><span>Kontak Sekolah</span></div>
                    </a>
                </li> --}}

                {{-- <li class="c-menu__item {{ request()->is('faq*') ? 'is-active' : '' }} has-submenu" data-toggle="tooltip" title="FAQ">
                    <a class="c-menu__item__inner" href="/faq">
                        <div class="ic animate__backInLeft animate__animated">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="c-menu-item__title animate__backInLeft animate__animated"><span>FAQ</span></div>
                    </a>
                </li> --}}

            </ul>
        </nav>
    </div>
</div>
