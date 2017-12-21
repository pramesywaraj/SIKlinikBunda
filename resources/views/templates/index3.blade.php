@extends('master-admin')
{!! Charts::assets() !!}
@section('content')


<div class="card">
    <div class="card-block">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">Ini Halaman Admin</h4>
            </div>
            <!--/.col-->

            <div>
                <center>
                    {!! $chart->render() !!}
                </center>
            </div>


    </div>
</div>
<!--/.card-->




<!--/.row-->

@endsection
