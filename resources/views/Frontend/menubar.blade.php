<div class="col-xl-6 col-lg-7">
    <div class="main-menu main-menu-padding-1 main-menu-lh-3 main-menu-hm4 main-menu-center">
        <nav>
            <ul>
                @foreach ($cateLimit as $ke => $cateParent)
                    <li>
                        <a href="#">{{$cateParent->cate_name}}</a>
                        @if ($cateParent->categoryChild->count())
                            <ul class="sub-menu-style">
                                @foreach ($cateParent->categoryChild as $cate)
                                    <li>
                                        <a href="about-us.html">{{$cate->cate_name}} </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                <li><a href="">CONTACT </a></li>
            </ul>
        </nav>
    </div>
</div>
