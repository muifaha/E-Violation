<div class="l-sidebar">
    <div class="logo">
        <img src="../img/smkn1.png" width="35">
        <div class="text-logo">
            <span>E - Book</span>
        </div>
    </div>

    <div class="l-sidebar__content">
        <nav class="c-menu js-menu">
            <ul class="u-list">

                <li class="c-menu__item {{ request()->is('home') ? 'is-active' : '' }}  has-submenu" data-toggle="tooltip"
                    title="Dashboard">
                    <a class="c-menu__item__inner" href="/home">
                        <div class="ic">
                            <i class='bx bxs-grid-alt'></i>
                        </div>
                        <div class="c-menu-item__title"><span>Home</span></div>
                    </a>
                </li>

                <li class="c-menu__item has-submenu nav-item {{ request()->is('daftar-siswa*') ? 'is-active' : '' }}"
                    data-toggle="tooltip" title="Skor Siswa">
                    <a class="c-menu__item__inner" href="/daftar-siswa">
                        <div class="ic">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="c-menu-item__title"><span>Daftar Siswa</span></div>
                    </a>
                </li>

                <li class="c-menu__item has-submenu nav-item {{ request()->is('guru*') ? 'is-active' : '' }}"
                    data-toggle="tooltip" title="Histori Skor">
                    <a class="c-menu__item__inner" href="/guru/histori-skor">
                        <div class="ic">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="c-menu-item__title"><span>Histori Skor</span></div>
                    </a>
                </li>

                {{-- <li class="c-menu__item  has-submenu " data-toggle="tooltip" title="Penanganan">
                      <a class="c-menu__item__inner" href="/penanganan">
                        <div class="ic">

                        <i class="fas fa-user-cog"></i>
                        </div>
                        <div class="c-menu-item__title"><span>Penanganan</span></div>
                      </a>
                  </li>

                  <li class="c-menu__item  has-submenu" data-toggle="tooltip" title="Tata Tertib">
                      <a class="c-menu__item__inner" href="/tata-tertib">
                          <i class="fas fa-chalkboard-teacher"></i>
                          <div class="c-menu-item__title"><span>Tata Tertib</span></div>
                      </a>
                  </li>

                  <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Kontak Sekolah">
                      <a class="c-menu__item__inner" href="/kontak-sekolah">
                          <i class="fas fa-phone"></i>
                          <div class="c-menu-item__title"><span>Kontak Sekolah</span></div>
                      </a>
                  </li>

                  <li class="c-menu__item has-submenu" data-toggle="tooltip" title="FAQ">
                      <a class="c-menu__item__inner" href="/faq">
                          <i class="fas fa-comments"></i>
                          <div class="c-menu-item__title"><span>FAQ</span></div>
                      </a>
                  </li> --}}

            </ul>

        </nav>
    </div>
</div>
