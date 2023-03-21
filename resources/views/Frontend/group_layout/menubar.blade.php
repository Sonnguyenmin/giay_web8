<div class="col-xl-6 col-lg-7">
    <div class="main-menu main-menu-padding-1 main-menu-lh-3 main-menu-hm4 main-menu-center">
        <nav>
            <ul>
                @foreach($menuLimit as $menuParent)
                    <li>
                        <a href="">{{$menuParent->menu_name}}</a>
                        @if ($menuParent->menuChild->count())
                            <ul class="sub-menu-style">
                                @foreach ($menuParent->menuChild as $menus)
                                    <li>
                                        <a href="{{$menus->menu_name}}">{{$menus->menu_name}} </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                <li><a href="{{route('contact')}}">CONTACT </a></li>
            </ul>
        </nav>
    </div>
</div>
