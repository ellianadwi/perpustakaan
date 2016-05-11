<div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Perpustakaan Sekolah!</span></a>
    </div>
    <div class="clearfix"></div>

    <!-- menu prile quick info -->
    <div class="profile">
        <div class="profile_pic">
            <img src="{!! asset('assets/images/user.png') !!}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Selamat Datang,</span>
            <h2>Anggota</h2>
        </div>
    </div>
    <!-- /menu prile quick info -->

    <br/>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
            {{--<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>--}}
            {{--<ul class="nav child_menu" style="display: none">--}}
            <li id="menu-home">
                <a href="{!! route('page.useranggota') !!}">
                    <i class="fa fa-home"></i>Home</a>
            </li>
            <li id="menu-buku">
                <a href="{!! route('page.buku') !!}">
                    <i class="fa fa-book"></i>Buku</a>
            </li>
            <li id="menu-anggota">
                <a href="{!! route('page.anggota') !!}">
                    <i class="fa fa-user"></i>Anggota</a>
            </li>

            <li id="menu-peminjaman">
                <a href="{!! route('page.peminjaman') !!}"><i class="fa fa-book"></i>Peminjaman</a>
            </li>

            {{--<li id="menu-pengembalian">--}}
                {{--<a href="{!! route('page.pengembalian') !!}"><i class="fa fa-book"></i>Pengembalian</a>--}}
            {{--</li>--}}
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    {{--<div class="sidebar-footer hidden-small">--}}
    {{--<a data-toggle="tooltip" data-placement="top" title="Settings">--}}
    {{--<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>--}}
    {{--</a>--}}
    {{--<a data-toggle="tooltip" data-placement="top" title="FullScreen">--}}
    {{--<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>--}}
    {{--</a>--}}
    {{--<a data-toggle="tooltip" data-placement="top" title="Lock">--}}
    {{--<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>--}}
    {{--</a>--}}
    {{--<a data-toggle="tooltip" data-placement="top" title="Logout">--}}
    {{--<span class="glyphicon glyphicon-off" aria-hidden="true"></span>--}}
    {{--</a>--}}
    {{--</div>--}}
            <!-- /menu footer buttons -->
</div>