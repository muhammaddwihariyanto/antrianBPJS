<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-cadet blue">
    <div class="container">
        <a href="index3.html" class="brand-link">
            <img src="{{url('')}}/bower_components/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">RSDEA</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>

            </ul>

            <!-- SEARCH FORM -->

        </div>

        <!-- Right navbar links -->

        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
    </div>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" style="color:red;">
                <i class="fas fa-power-off"></i>

            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- <div class="dropdown-divider"></div> -->
                <a href="{{url('logout')}}" class="dropdown-item dropdown-footer">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->