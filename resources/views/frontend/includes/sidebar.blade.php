<div class="inner-dashboard-left">
  <div class="idl-top id-bg">
    <div class="idl-top-text">
      <span>Hello</span>
      <h4>{{ auth()->user()->name }}</h4>
    </div>
  </div>
  <div class="idl-bottom id-bg">
    <ul>
      <li class="{{ ( request()->routeis('customer.dashboard' ))?'idlb-active':'' }}">
        <a href="{{ route('customer.dashboard') }}">
          <i class="fas fa-user"></i> <span>Account
          Details</span> 
        </a>
      </li>




      <!-- <li><a href="#"><i class="fas fa-tasks"></i> User Activity</a></li> -->
      <li class="{{ ( request()->routeis('customer.order.*' ))?'idlb-active':'' }}">
        <a href="{{ route('customer.order.index') }}">
          <i class="fas fa-cart-arrow-down"></i>  <span>Orders</span> 
        </a>
      </li>



      <li class="{{ ( request()->routeis('customer.wishlist.index' ))?'idlb-active':'' }}">
        <a href="{{ route('customer.wishlist.index') }}">
          <i class="far fa-heart"></i>  <span>Wishlist</span> 
        </a>
      </li>



      <li class="{{ ( request()->routeis('customer.show_password_reset_form' ))?'idlb-active':'' }}">
      <a href="{{ route('customer.show_password_reset_form') }}">
          <i class="fas fa-edit"></i>  <span> Change Password</span>
        </a>
      </li>



      <li>
        <a href="{{ route('logout') }}">
          <i class="fas fa-sign-in-alt"></i>  <span>Logout</span> 
        </a>
      </li>
    </ul>
  </div>
</div>
