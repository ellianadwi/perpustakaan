<div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
    </div>
    <div class="clearfix"></div>

    <!-- menu prile quick info -->
    <div class="profile">
        <div class="profile_pic">
            <img src="{!! asset('assets/images/img.jpg') !!}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>John Doe</h2>
        </div>
    </div>
    <!-- /menu prile quick info -->

    <br/>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li><a href="index2.html">Dashboard2</a>
                        </li>
                        <li><a href="index3.html">Dashboard3</a>
                        </li>
                    </ul>
                </li>
                <li id="menu-buku">
                    <a href="{!! route('page.buku') !!}">
                        <i class="fa fa-book"></i>Buku</a>
                </li>

                <li id="menu-kategori">
                    <a href="{!! route('page.kategori') !!}">
                        <i class="fa fa-book"></i>Kategori</a>
                </li>
                <li id="menu-petugas">
                    <a href="{!! route('page.petugas') !!}">
                        <i class="fa fa-book"></i>Petugas</a>
                </li>
                <li><a><i class="fa fa-table"></i> Anggota <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li id="menu-kelasx">
                            <a href="{!! route('page.kelasx') !!}">Kelas X</a>
                        </li>
                        <li id="menu-kelasxi">
                            <a href="{!! route('page.kelasxi') !!}">Kelas XI</a>
                        </li>
                        <li id="menu-kelasxii">
                            <a href="{!! route('page.kelasxii') !!}">Kelas XII</a>
                        </li>
                    </ul>
                </li>
                <li id="menu-peminjaman">
                    <a href="{!! route('page.peminjaman') !!}"><i class="fa fa-book"></i>Peminjaman</a>
                </li>

                <li id="menu-pengembalian">
                    <a href="{!! route('page.pengembalian') !!}"><i class="fa fa-book"></i>Pengembalian</a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>