<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="#">
            <img alt="Usuário" src="{{asset('/img/sms/mcz-logo.png')}}" />
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler">
            <span></span>
        </button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler">
            <i class="flaticon-more-1"></i>
        </button>
    </div>
</div>
<!-- fim do header mobile -->

<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
    <div class="kt-header__top">
        <div class="kt-container ">
            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                <div class="kt-header__brand-logo">
                    <a href="#">
                        <img alt="Logo" src="{{asset('/img/sms/mcz-logo-slogan-horizontal.png')}}" class="kt-header__brand-logo-default" />
                    </a>
                </div>
            </div>

            <div class="kt-header__topbar kt-grid__item kt-grid__item--fluid">
                <div class="kt-header__topbar-item kt-header__topbar-item--user">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                        <img class="kt-hidden-" alt="Pic" src="{{asset('/img/sms/user.png')}}" />
                        <span class="kt-header__topbar-icon kt-header__topbar-icon--brand kt-hidden">
                        <b>S</b>
                      </span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                        <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                            <div class="kt-user-card__avatar">
                                <img class="kt-hidden-" alt="Pic" src="{{asset('/img/sms/user.png')}}" />
                            </div>
                            <div class="kt-user-card__name"> @yield('usuario') </div>
                            <div class="kt-user-card__badge">
                                <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">@yield('perfil_usuario')</span>
                            </div>
                        </div>

                        <div class="kt-notification">
                            <div class="kt-notification__custom kt-space-between">
                                <a href="#" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sair</a>
                                <a href="#" target="_blank" class="btn btn-clean btn-sm btn-bold">Alterar senha</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-header__bottom">
        <div class="kt-container ">
            <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn">
                <i class="la la-close"></i>
            </button>
            <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                            <a href="#" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-text">Início</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                            <a href="#" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-text">Prontuários</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                            <a href="#" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-text">Prontuários&nbsp;&nbsp;&nbsp;desativados</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                            <a href="#" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-text">Usuários</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
