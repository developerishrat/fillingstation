<!-- ########## START: LEFT PANEL ########## -->

<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> {{ env('APP_NAME') }}</a></div>
<div class="sl-sideleft">

  <div class="input-group input-group-search">
    <input type="search" name="search" class="form-control" placeholder="Search">
    <span class="input-group-btn">
      <button class="btn"><i class="fa fa-search"></i></button>
    </span><!-- input-group-btn -->
  </div><!-- input-group -->

  <label class="sidebar-label">Navigation</label>
  <div class="sl-sideleft-menu">
    <a href="{{ url('/home') }}" class="sl-menu-link @yield('dashboard')" >
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Dashboard</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->




    @if (Auth::user()->role!=1)


    <a href="{{ url('/viewuser') }}" class="sl-menu-link @yield('user')">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-people-outline tx-20"></i>
        <span class="menu-item-label">User</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->

    </a><!-- sl-menu-link -->
    <a href="#" class="sl-menu-link  @yield('fuel')">
    <div class="sl-menu-item">
        <i class="menu-item-icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Fuel</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
    </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
    <li class="nav-item"><a href="{{ url('/addfuel') }}" class="nav-link">Add Fuel</a></li>
    <li class="nav-item"><a href="{{ url('/viewfuel') }}" class="nav-link">View Fuel</a></li>

    </ul>

    <a href="{{ url('/cupon') }}" class="sl-menu-link @yield('cupon')" >
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-22"></i>
          <span class="menu-item-label">Coupon</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->

    <a href="{{ url('/stock') }}" class="sl-menu-link @yield('stock')" >
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-22"></i>
          <span class="menu-item-label">Stock</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->


    <a href="{{ url('/viewadminorder') }}" class="sl-menu-link @yield('order')" >
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-22"></i>
          <span class="menu-item-label">Order</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->




    @endif


  </div><!-- sl-sideleft-menu -->

  <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">

  <div class="sl-header-left">

    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
  </div><!-- sl-header-left -->
  <h2>Online Filling Station Management System </h2>
  <div class="sl-header-right">
    <nav class="nav">
      <div class="dropdown">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name">{{ Auth::user()->name }}</span></span>
          <img src="{{ asset('uploads/profile') }}/{{ Auth::user()->profile_photo }}" class="wd-32 rounded-circle" alt="">
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-200">
          <ul class="list-unstyled user-profile-nav">

                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Sign Out</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
          </ul>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </nav>
    <div class="navicon-right">
      <a id="btnRightMenu" href="" class="pos-relative">

        <!-- start: if statement -->
        <span ></span>
        <!-- end: if statement -->
      </a>
    </div><!-- navicon-right -->
  </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="sl-sideright">


  <!-- Tab panes -->


  </div><!-- tab-content -->
</div><!-- sl-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->
