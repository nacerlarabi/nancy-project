
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-top: 40px;">
            <ul class="navbar-nav ml-auto">
                @foreach($menu as $menuTab)
                    <li class="nav-item @if($menuTab['submenu']) dropdown @endif">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="underlineEffect">{{ __('menu.'.$menuTab['title']) }}</span>
                        </a>
                        @if (isset($menuTab['submenu']))
                            @if ($menuTab['type'] === "simple")
                                <ul class="dropdown-menu dropdown-menu-right">
                                    @foreach($menuTab['submenu'] as $subMenu)
                                        @include ('common.submenu', ['submenu'])
                                 @endforeach
                                </ul>
                            @else
                                <ul class="dropdown-menu dropdown-menu-right">
                                    @foreach($menuTab['submenu'] as $subMenu)
                                        @include ('common.grouped-submenu', ['subMenu'])
                                    @endforeach
                                </ul>
                            @endif
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
