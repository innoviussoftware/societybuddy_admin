<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ env('APP_URL') }}/admin_assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div> -->
    <!-- search form -->
    <!-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <!-- <li class="header">MAIN NAVIGATION</li> -->
      <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

      <li class=" treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Cities</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.cities.add') }}"><i class="fa fa-circle-o"></i> Add City</a></li>
          <li><a href="{{ route('admin.cities.index') }}"><i class="fa fa-circle-o"></i> Cities List</a></li>
        </ul>
      </li>

      <li class=" treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Areas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.areas.add') }}"><i class="fa fa-circle-o"></i> Add Area</a></li>
          <li><a href="{{ route('admin.areas.index') }}"><i class="fa fa-circle-o"></i> Areas List</a></li>
        </ul>
      </li>
      <li class=" treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Societies</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.societies.add') }}"><i class="fa fa-circle-o"></i> Add Society</a></li>
          <li><a href="{{ route('admin.societies.index') }}"><i class="fa fa-circle-o"></i> Society List</a></li>
        </ul>
      </li>
      <li class=" treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Guard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.guardes.add') }}"><i class="fa fa-circle-o"></i> Add Guard</a></li>
          <li><a href="{{ route('admin.guardes.index') }}"><i class="fa fa-circle-o"></i> Guard List</a></li>
        </ul>
      </li>
      <li class=" treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Referral</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          
          <li><a href="{{ route('admin.referral.index') }}"><i class="fa fa-circle-o"></i> Referral List</a></li>
        </ul>
      </li>




      <!-- <li class="treeview">
        <a href="{{ env('APP_URL') }}/admin_assets/#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{ env('APP_URL') }}/admin_assets/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="{{ env('APP_URL') }}/admin_assets/#">
          <i class="fa fa-files-o"></i>
          <span>Layout Options</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul>
      </li>
      <li>
        <a href="{{ env('APP_URL') }}/admin_assets/pages/widgets.html">
          <i class="fa fa-th"></i> <span>Widgets</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{ env('APP_URL') }}/admin_assets/#">
          <i class="fa fa-pie-chart"></i>
          <span>Charts</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{ env('APP_URL') }}/admin_assets/#">
          <i class="fa fa-laptop"></i>
          <span>UI Elements</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{ env('APP_URL') }}/admin_assets/#">
          <i class="fa fa-edit"></i> <span>Forms</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{ env('APP_URL') }}/admin_assets/#">
          <i class="fa fa-table"></i> <span>Tables</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
        </ul>
      </li>
      <li>
        <a href="{{ env('APP_URL') }}/admin_assets/pages/calendar.html">
          <i class="fa fa-calendar"></i> <span>Calendar</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-red">3</small>
            <small class="label pull-right bg-blue">17</small>
          </span>
        </a>
      </li>
      <li>
        <a href="{{ env('APP_URL') }}/admin_assets/pages/mailbox/mailbox.html">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow">12</small>
            <small class="label pull-right bg-green">16</small>
            <small class="label pull-right bg-red">5</small>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{ env('APP_URL') }}/admin_assets/#">
          <i class="fa fa-folder"></i> <span>Examples</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{ env('APP_URL') }}/admin_assets/#">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li class="treeview">
            <a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o"></i> Level One
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o"></i> Level Two</a></li>
              <li class="treeview">
                <a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o"></i> Level Two
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  <li><a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </ul>
      </li>
      <li><a href="{{ env('APP_URL') }}/admin_assets/https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">LABELS</li>
      <li><a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="{{ env('APP_URL') }}/admin_assets/#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
