<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->


    {{-- <a href="{{url('/home')}}" class="brand-link">
        <img src="{{url('')}}/bower_components/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ANTREAN</span>
    </a> --}}
    <div style="background: #1a9c39" class="brand-link">
       
       
        <!-- brand -->
        <a href="#/app/dashboard" class="bg-success navbar-brand-link text-lt" style="background: #1a9c39;margin-left:10%">
            <i class="fa fa-laptop"></i>
            <span class="hidden-folded m-l-sm ng-binding"  style="margin-left:5%">
               <strong>ANTREAN</strong> 
            </span>
        </a>
        <!-- / brand -->
    </div>
    <!-- Sidebar -->
    <div class="sidebar">



        <!-- Sidebar Menu -->
        <nav class="content">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">

                    <label for="">Menu</label>

                </li>
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/administrator/home')}}"
                        class="nav-link  request()->is('ambil') ? 'active' : ''  }}">
                        <i class="fas fa-chart-bar"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/administrator/video')}}"
                        class="nav-link  request()->is('cariPasien') ? 'active' : ''  }}">
                        <i class="fas fa-th-list"></i>
                        <p>
                           <i>Loket</i> 
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/administrator/video')}}"
                        class="nav-link  request()->is('cariPasien') ? 'active' : ''  }}">
                        <i class="fas fa-video"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>


            </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>