<style>
    .linkmenu{
        color: white;position: relative;
        display: block;
        padding: 10px 15px;
    }
    .navmenu{
        font-size:1em!important;
        color: white!important; 
        margin-left: 50px!important;
        margin-right: 50px!important;
        line-height:50px!important;
    }
    .navmenu:hover{
        color:#b5c9ff!important;
    }
</style>
<header id="header">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-phone"></i> 09991886333</a></li>
                            <li><a href=""><i class="fa fa-envelope"></i> tranthithao@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle" style ="background-color: #616fc7">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                    <a href="{{ asset('/') }}"><img src="../admin_asset/images/home/logo.png" 
                        class="" style="width: 100%;"  /></a>
                    </div>
                </div>
                <div class="col-sm-8" style="margin-top: 30px">
                    <div  class="pull-right">
                        <ul class="navbar-nav">
                        <div class="search_box pull-right">
                                <form class="typeahead" role="search">
                                    <input type="search" name="q" class="form-control search-input" placeholder="Type something..." autocomplete="off">
                                </form>
                            </div>
                            <li><a class="linkmenu" href="{{ asset('/checkout') }}"><i class="fa fa-crosshairs"></i> Thanh Toán</a></li>
                            <li><a class="linkmenu" href="{{ asset('/cart') }}"><i class="fa fa-shopping-cart"></i> Giỏ Hàng ({{ Cart::count() }})</a></li>
                            @if(Auth::user())
                            <li><a  class="linkmenu" href="#"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
                            <li><a class="linkmenu" href="" onclick="event.preventDefault();
                                document.getElementById('logout').submit();" title="">Đăng xuất</a></li>
                                <form id="logout" action="logout" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                            <li><a class="linkmenu" href="login"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:5px">
        <div class="container">
            <div class="row" style="background-color: #151b4e; height: 50px!important;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                        <li style="border-right: 1px solid white" class="dropdown"><a class="navmenu" style="" href="{{ asset('/') }}"><i style="margin-right:5px"class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        <li style="border-right: 1px solid white" class="dropdown"><a class="navmenu" href="{{ asset('/post') }}"><i style="margin-right:5px" class="fa fa-bell-o" aria-hidden="true"></i> Thông Báo </a>
                           
                        </li>
                        <li style="border-right: 1px solid white" class="dropdown"><a class="navmenu" href="{{ asset('/mapshop') }}"><i style="margin-right:5px" class="fa fa-map-marker" aria-hidden="true"></i> Cửa Hàng</a>
                        </li>
                        <li style="border-right: 1px solid white">
                            <a class="navmenu" href="{{ asset('/contact') }}">
                            <i style="margin-right:5px" class="fa fa-envelope-o" aria-hidden="true"></i> Liên Hệ
                            </a>
                        </li>
                        <li>
                            <a  class="navmenu" href="{{ asset('/cart') }}">
                            <i style="margin-right:5px" class="fa fa-shopping-cart" aria-hidden="true"></i> Kiểm tra đơn hàng
                            </a>
                        </li>
                        </ul>
                         
                    </div>
                    
                </div>
               
            </div>
        </div>
    </div>
</header>

