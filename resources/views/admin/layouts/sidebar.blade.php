<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
    @if(auth()->guard('admin')->check())

      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->guard('admin')->user()->name}}</p>

        </div>
      </div>
    @endif
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <li>
        <a href="{{ url('/admin')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ URL::route('country') }}"><i class="fa fa-circle-o"></i> Country</a></li>
            <li><a href="{{ URL::route('state') }}" ><i class="fa fa-circle-o"></i> State</a></li>
            <li><a href="{{ URL::route('category') }}" ><i class="fa fa-circle-o"></i> Category</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Product Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ URL::route('product') }}"><i class="fa fa-circle-o"></i> Product</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Content Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ URL::route('cms') }}"><i class="fa fa-circle-o"></i> CMS Pages</a></li>
            <li class=""><a href="{{ URL::route('emailtemplate') }}"><i class="fa fa-circle-o"></i> Email Template</a></li>
            <li class=""><a href="{{ URL::route('contactus') }}"><i class="fa fa-circle-o"></i> Contact Us</a></li>
            <li class=""><a href="{{ URL::route('subscriber') }}"><i class="fa fa-circle-o"></i> Newsletter Subscriber</a></li>
          </ul>
        </li>


        <!-- <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>