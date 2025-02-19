<!-- start: #header -->
<header id="header" class="minimalist enable-sticky" style="height: 115.3px;">

    <!-- start: .menu-wrapper -->
    <div class="menu-wrapper">

        <div class="grid-container">
            <div class="epcl-flex grid-wrapper">

                <!-- start: .main-nav -->
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="search-menu-item"><span class="link" data-ghost-search=""><svg
                                    class="icon main-color large">
                                    <use xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#search-icon">
                                    </use>
                                </svg> <span class="hide-on-mobile">Quick Search...</span></span></li>
                    </ul>
                </nav>
                <!-- end: .main-nav -->

                <div class="logo"><a href="https://ghost.estudiopatagon.com/zento"><img
                            src="{{ asset('assets') }}/image/logo-zento.svg" alt="Zento" width="170"
                            height="60" decoding="async"></a></div>

                <div class="account underline-effect hide-on-mobile hide-on-tablet hide-on-desktop-sm">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>
                             
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>  
                    
                    <a href="https://ghost.estudiopatagon.com/zento/subscribe" class="epcl-button">Subscribe</a>
                </div>

                <div class="open-menu">
                    <svg class="open icon ularge">
                        <use xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#menu-icon"></use>
                    </svg>
                </div>

                <div class="clear"></div>

            </div>

            <div class="clear"></div>
        </div>

    </div>
    <!-- end: .menu-wrapper -->

    <div class="clear"></div>

</header>
<!-- end: #header -->