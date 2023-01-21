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

                <li class="c-menu__item {{ request()->is('home*') ? 'is-active' : '' }}  has-submenu"
                    data-toggle="tooltip" title="Dashboard">
                    <a class="c-menu__item__inner" href="/home">
                        <div class="ic">
                            <i class='bx bxs-grid-alt'></i>
                        </div>
                        <div class="c-menu-item__title"><span>Dashboard</span></div>
                    </a>
                </li>

                <li class="c-menu__item {{ request()->is('guru/daftar-siswa*') ? 'is-active' : '' }}  has-submenu"
                    data-toggle="tooltip" title="Daftar Siswa">
                    <a class="c-menu__item__inner" href="/guru/daftar-siswa">
                        <div class="ic">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="c-menu-item__title"><span>Daftar Siswa</span></div>
                    </a>
                </li>
                @if ($siswas->count())
                    <li class="c-menu__item {{ request()->is('guru/histori*') ? 'is-active' : '' }}  has-submenu"
                        data-toggle="tooltip" title="Histori Skor">
                        <a class="c-menu__item__inner" href="/guru/histori">
                            <div class="ic">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="c-menu-item__title"><span>Histori Guru</span></div>
                        </a>
                    </li>
                    <li class="c-menu__item {{ request()->is('guru/penanganan*') ? 'is-active' : '' }} has-submenu "
                        data-toggle="tooltip" title="Penanganan">
                        <a class="c-menu__item__inner" href="/guru/penanganan">
                            <div class="ic">
                                <i class="fas fa-user-cog"></i>
                            </div>
                            <div class="c-menu-item__title"><span>Penanganan</span></div>
                        </a>
                    </li>
                @endif
            </ul>

        </nav>
    </div>
</div>
