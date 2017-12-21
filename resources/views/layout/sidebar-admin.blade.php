<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">


            <!-- <div class="form-group row">
                        <div class="col-md-9">
                            <input type="text"name="name" class="form-control" placeholder="search">
                        </div>
                        <button type="submit" name="submit"  class="btn btn-sm btn-primary"><i class="icon-magnifier"></i></button>
                    </div> -->

            <li class="nav-title">
                Admin
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="{{ url('/templates/reportPasien') }}"><i class="icon-people"></i> Data Pasien</a>

            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="{{ url('/templates/reportObat') }}"><i class="icon-people"></i> Data Obat</a>

            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="{{ url('/templates/reportUser') }}"><i class="icon-people"></i> Data Pegawai</a>

            </li>


        </ul>
    </nav>
</div>
