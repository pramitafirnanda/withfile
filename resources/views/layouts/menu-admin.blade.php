<div class="topbar-main">
    <div class="container-fluid">

        <!-- Logo container-->
        <div class="logo">
            <a href="index.html" class="logo">
                <img src="{{URL::asset('theme/assets/images/logo_sm.png')}}" height="26" alt="UWP" class="logo-small">
                <img src="{{URL::asset('theme/assets/images/logo.png')}}" height="53" alt="UWP" class="logo-large">
            </a>
        </div>
        <!-- End Logo container-->

        <div class="menu-extras topbar-custom">

            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                <li class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                {{--if data baru dari dosen--}}

                <?php
                $ditlitabmas    = \App\Ditlitabmas::where('status', 'a')->get();
                ?>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i class="fi-bell noti-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">new</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <div class="slimscroll" style="max-height: 190px;">
                            <!-- item-->
                            @if($ditlitabmas)
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">data baru ditlitabmas<small class="text-muted">1 min ago</small></p>
                                </a>
                            @else
                                <span>nothing</span>
                            @endif
                        </div>

                    </div>
                </li>

                <li class="dropdown notification-list" style="color: red">
                    <div style="color: red;">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1 pro-user-name">{{ Auth::user()->name }}  <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->


                            <a href="{{ url('/logout') }}" class="dropdown-item notify-item"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end menu-extras -->

        <div class="clearfix"></div>

    </div> <!-- end container -->
</div>
<!-- end topbar-main -->

<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <?php
            $menusdp    = \App\Menu::where('id_parent', 2)->orderBy('id')->get()->keyBy('id');
            $menulp     = \App\Menu::where('id_parent', 6)->orderBy('id')->get()->keyBy('id');
            $menusd     = \App\Menu::where('id_parent', 7)->orderBy('id')->get()->keyBy('id');
            $menul      = \App\Menu::where('id_parent', 10)->orderBy('id')->get()->keyBy('id');

            $msdpen    = \App\Menuadmin::where('id_parent', 2)->orderBy('id')->get()->keyBy('id');
            $mlp       = \App\Menuadmin::where('id_parent', 6)->orderBy('id')->get()->keyBy('id');
            $msdp      = \App\Menuadmin::where('id_parent', 7)->orderBy('id')->get()->keyBy('id');
            $mlkp      = \App\Menuadmin::where('id_parent', 10)->orderBy('id')->get()->keyBy('id');
            $master    = \App\Menuadmin::where('id_parent', 12)->orderBy('id')->get()->keyBy('id');
            ?>
                    <!-- Navigation Menu-->
            {{-- <ul class="navigation-menu">
                    @foreach($menus as $menu)
                        <li class="has-submenu">
                            <a href="{{URL::to($menu->link)}}"><i class="fi-marquee-plus"></i>{{$menu->title}}</a>
                            @include('layouts.menu-admin-child')
                        </li>
                    @endforeach
                </ul>--}}

            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="/"><i class="fi-marquee-plus"></i>Dashboard</a>
                </li>

                @if(Auth::user()->userable_type == 'App\Datadosen')
                    <li class="has-submenu">
                        <a href="#"><i class="fi-marquee-plus"></i>Sumber Daya Penelitian</a>
                        <ul class="submenu">
                            @foreach($menusdp as $menu)
                                <li><a href="{{URL::to($menu->link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fi-marquee-plus"></i>Luaran Penellitian</a>
                        <ul class="submenu">
                            @foreach($menulp as $menu)
                                <li><a href="{{URL::to($menu->link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fi-marquee-plus"></i>Sumber Dana Pengabdian</a>
                        <ul class="submenu">
                            @foreach($menusd as $menu)
                                <li><a href="{{URL::to($menu->link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fi-marquee-plus"></i>Luaran Kinerja Pengabdian</a>
                        <ul class="submenu">
                            @foreach($menul as $menu)
                                <li><a href="{{URL::to($menu->link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                @elseif(Auth::user()->userable_type == 'App\Admin')
                    <li class="has-submenu">
                        <a href="#"><i class="fi-marquee-plus"></i>Sumber Daya Penelitian</a>
                        <ul class="submenu">
                            @foreach($msdpen as $menu)
                                <li><a href="{{URL::to($menu->link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fi-marquee-plus"></i>Luaran Penellitian</a>
                        <ul class="submenu">
                            @foreach($mlp as $menu)
                                <li><a href="{{URL::to($menu->link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fi-marquee-plus"></i>Sumber Dana Pengabdian</a>
                        <ul class="submenu">
                            @foreach($msdp as $menu)
                                <li><a href="{{URL::to($menu->link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fi-marquee-plus"></i>Luaran Kinerja Pengabdian</a>
                        <ul class="submenu">
                            @foreach($mlkp as $menu)
                                <li><a href="{{URL::to($menu->link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fi-marquee-plus"></i>Master</a>
                        <ul class="submenu">
                            @foreach($master as $menu)
                                <li><a href="{{URL::to($menu->link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <span>nothing</span>
                @endif
            </ul>
            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->
