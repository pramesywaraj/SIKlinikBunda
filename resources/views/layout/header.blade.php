<header class="app-header navbar">
    <a class="navbar-brand" href="{{ url('/') }}"></a>

    <!-- <form action="store" method="POST"  class="form-horizontal col-sm-3">
    <div class="input-group">
    <span class="input-group-btn">
        <button type="button" class="btn-search"><i class="fa fa-search"></i></button>
    </span>
    <input type="text" name="input1-group2" class="form-control ui-input-text col-sm-10" placeholder="search for patient data and status">

</div></form> -->

    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="d-md-down-none">admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link navbar-toggler aside-menu-toggler" href="#">☰</a>
        </li>

    </ul>
</header>
