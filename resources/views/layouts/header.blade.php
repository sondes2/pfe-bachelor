			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="/" class="m-brand__logo-wrapper">
									<img alt="" src="{{ asset('images/logo/logo_default.png') }}" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
								<!--	<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>-->

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                  @if(Auth::user()->role != "user")
                  
                  <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
												<a href="http://127.0.0.1:8000/Users" class="m-menu__link ">
											<i class="m-menu__link-icon la la-users"></i>
											<span class="m-menu__link-title">
											<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Users</span>
											</span> </span></a>

										</li>

										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
												<a href="http://127.0.0.1:8000/Trainers" class="m-menu__link ">
											<i class="m-menu__link-icon la la-bullhorn"></i>
											<span class="m-menu__link-title">
											<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Trainers</span>
											</span> </span></a>
                    </li>

                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
												<a href="http://127.0.0.1:8000/ListChallengs" class="m-menu__link ">
											<i class="m-menu__link-icon la la-bullseye"></i>
											<span class="m-menu__link-title">
											<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Challengs</span>
											</span> </span></a>
                    </li>
                    @endif

									</ul>
								</div></div>
<!-- BEGIN: Topbar -->
<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
  <div class="m-stack__item m-topbar__nav-wrapper">
    <ul class="m-topbar__nav m-nav m-nav--inline">



      <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
       m-dropdown-toggle="click">
        <a href="#" class="m-nav__link m-dropdown__toggle">
          <span class="m-topbar__userpic">
          @if (file_exists(public_path("images/users/".Auth::user()->id.".jpg")))
          <img src=" {{ asset('images/users/'.Auth::user()->id.'.jpg')}}" class="m--img-rounded m--marginless" alt="" />
          @else
          <img src=" {{ asset('images/users/user.jpg')}}" class="m--img-rounded m--marginless" alt="" />
          @endif
            
          </span>
          <span class="m-topbar__username m--hide">{{Auth::user()->last_name}} {{ Auth::user()->first_name}}</span>
        </a>
        <div class="m-dropdown__wrapper">
          <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
          <div class="m-dropdown__inner">
            <div class="m-dropdown__header m--align-center" style="background: url( {{ asset('images/user_profile_bg.jpg')}}); background-size: cover;">
              <div class="m-card-user m-card-user--skin-dark">
                <div class="m-card-user__pic">
                @if (file_exists(public_path("images/users/".Auth::user()->id.".jpg")))
          <img src=" {{ asset('images/users/'.Auth::user()->id.'.jpg')}}" class="m--img-rounded m--marginless" alt="" />
          @else
          <img src=" {{ asset('images/users/user.jpg')}}" class="m--img-rounded m--marginless" alt="" />
          @endif

                </div>
                <div class="m-card-user__details">
                  <span class="m-card-user__name m--font-weight-500">{{Auth::user()->last_name}} {{ Auth::user()->first_name}}</span>
                  <a href="" class="m-card-user__email m--font-weight-300 m-link">{{Auth::user()->email}}</a>
                </div>
              </div> 
            </div>
            <div class="m-dropdown__body">
              <div class="m-dropdown__content">
                <ul class="m-nav m-nav--skin-light">
                  <li class="m-nav__section m--hide">
                    <span class="m-nav__section-text">Section</span>
                  </li>
                  <li class="m-nav__item">
                    <a href="{{Route('myprofil_get')}}" class="m-nav__link">
                      <i class="m-nav__link-icon flaticon-profile-1"></i>
                      <span class="m-nav__link-title">
                        <span class="m-nav__link-wrap">
                          <span class="m-nav__link-text">My Profile</span>
                          <!--<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>-->
                        </span>
                      </span>
                    </a>
                  </li>

                  <li class="m-nav__item">
                    <a href="{{route('Messages_get')}}" class="m-nav__link">
                      <i class="m-nav__link-icon flaticon-chat-1"></i>
                      <span class="m-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="m-nav__separator m-nav__separator--fit">
                  </li>
                  <li class="m-nav__item">
                    <a href="{{route('faq_get')}}" class="m-nav__link">
                      <i class="m-nav__link-icon flaticon-info"></i>
                      <span class="m-nav__link-text">FAQ</span>
                    </a>
                  </li>
                  <li class="m-nav__item">
                    <a href="{{route('contact_get')}}" class="m-nav__link">
                      <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                      <span class="m-nav__link-text">Support</span>
                    </a>
                  </li>
                  <li class="m-nav__separator m-nav__separator--fit">
                  </li>
                  <li class="m-nav__item">

                    <a href="{{ route('logout') }}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

<!-- END: Topbar -->

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
            </header>
            <!-- END: Header -->
