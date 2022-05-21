<div class="top_nav">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top_nav_left">free shipping on all u.s orders over $50</div>
            </div>
            <div class="col-md-6 text-right">
                <div class="top_nav_right">
                    <ul class="top_nav_menu">

                        <!-- Currency / Language / My Account -->
                        <li class="language">
                            <a href="#">
                                Vietname
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="language_selection">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li class="account">
                            <a href="#">
                                My Account
                                <i class="fa fa-angle-down"></i>
                            </a>
                            @auth
                            <ul class="account_selection">
                                <li><a href="#"><i class="fa-solid fa-user"></i>Profile</a></li>
                                <li><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>Đăng xuất</a></li>
                            </ul>
                            @endauth
                            <ul class="account_selection">
                                <li><a href="{{ route("site.login") }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                                <li><a href="{{ route("site.register") }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
