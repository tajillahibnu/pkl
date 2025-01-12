<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Pages</h6>
                        </div>
                    </li>
                    @foreach ($menus as $menu)
                    @empty($menu->sub_menu)
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav main-menu_nav" href="javascript:void(0)" data-url="{{$menu->url}}" data-params="{{base64_encode(json_encode($menu, JSON_PRETTY_PRINT))}}">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
                            </svg><span>{{$menu->name}}</span>
                        </a>
                    </li>
                    @else
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-editors"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-editors"></use>
                            </svg><span>{{$menu->name}}</span></a>
                        <ul class="sidebar-submenu">
                            @foreach ( $menu->sub_menu as $subMenu)
                            <li>
                                <a href="javascript:void(0)" class="main-menu_nav" data-url="{{$menu->url}}" data-params="{{base64_encode(json_encode($subMenu, JSON_PRETTY_PRINT))}}">{{$subMenu->name}} </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endempty
                    @endforeach

                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-support-tickets"></use>
                            </svg><span>Support Ticket</span></a></li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>