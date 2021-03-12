<header id="header"><!--header-->
  <div class="header_top"><!--header_top-->
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contactinfo">
            <ul class="nav nav-pills">
              <li><a href="#"><i class="fa fa-phone"></i> 01787972797</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>siamshaeed@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="social-icons myclass pull-right">
            <ul class="nav navbar-nav">
              <li><a href="https://www.facebook.com/siamshaeed/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/siamshaeed"><i class="fa fa-twitter" target="_blank"></i></a></li>
              <li><a href="https://www.linkedin.com/in/siamshaeed/"><i class="fa fa-linkedin" target="_blank"></i></a></li>
              <li><a href="https://github.com/siamshaeed"><i class="fa fa-github" target="_blank"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header_top-->

  <div class="header-middle"><!--header-middle-->
    <div class="container bottomHeaderMargin">
      <div class="row">
        <div class="col-sm-4">
          <div class="logo pull-left">
            <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/logo.jpg')}}" alt="" /></a>
          </div>
          <!-- false code -->
          <div class="btn-group pull-right">
            <div class="btn-group"></div>

            <div class="btn-group"></div>
          </div>
          <!-- false code End -->
        </div>
        <div class="col-sm-8">
          <div class="shop-menu pull-right">
            <ul class="nav navbar-nav">
              <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
              @if(Auth::check())
              <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
              <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
              </li>
              @else
              <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header-middle-->

  <div class="header-bottom"><!--header-bottom-->
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="mainmenu pull-left">
            <ul class="nav navbar-nav collapse navbar-collapse">
              <li><a href="{{url('/')}}" class="active">Home</a></li>
              <li><a href="{{url('/list-products')}}">Products</a></li>
              <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="sub-menu">
                  <li><a href="{{url('/myaccount')}}">Account</a></li>
                  <li><a href="{{url('/viewcart')}}">Cart</a></li>
                </ul>
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="search_box pull-right">
            <input type="text" placeholder="Search"/>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header-bottom-->
</header><!--/header-->