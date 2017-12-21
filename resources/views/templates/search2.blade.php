
@extends('master-pasien')

@section('content')


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<div class="row col d-flex justify-content-center">
    <div class="col-md-12">
        <div class="card ">
          <div class=" d-flex justify-content-center">
              <h3><strong>Medical Record</strong></h3>
          </div>
        @include('layout.breadcrumb')
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Pasien</th>
            <th>Status</th>
            <th>Tanggal Berobat</th>
            <th>Jenis Penyakit</th>
            <th>Pengobatan</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
        </div>



        <script type="text/javascript">
              $('#search').on('keyup',function(){
                $value=$(this).val();
                $.ajax({
                  type :'get',
                  url  :'{{URL::to('/templates/search/hasilsearch')}}',
                  data : {'search':$value},
                  success:function(data){
                    // console.log(data);
                    $('tbody').html(data);
                  }
                });
              })
            </script>


    <!--/.col-->
</div>
<!--/.row-->
@endsection
