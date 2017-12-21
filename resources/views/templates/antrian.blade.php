@extends('master-dokter')
@section('content')

<meta http-equiv="refresh" content="5">
<div class="row col d-flex justify-content-center">
    <div class="col-md-12">
        <div class="card ">
          <div class=" d-flex justify-content-center">
              <h3><strong>Antrian Pasien</strong></h3>
          </div>
        <table class="table table-striped">
        <thead>
          <tr>
            <th>No. Antrian</th>
            <th>Nama Pasien</th>
            <th>Status</th>
            <th>Jenis Poli</th>
            <th>Keluhan</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <?php $poli=""; $status=""; ?>
            <?php foreach ($pasiens as $pasien){ ?>
            <?php
            if($pasien->status==0){
              $status="Umum";
            }else{
              $status="BPJS";
            }

            if($pasien->poli==0){
              $poli="Umum";
            }else if($pasien->poli==1){
              $poli="Gigi";
            }else{
              $poli="KIA";
            }
            ?>
            <th scope="row"><?php echo $pasien->noAntrian ?></th>
            <td><?php echo $pasien->namaPasien ?></td>
            <td><?php echo $status ?></td>
            <td><?php echo $poli ?></td>
            <td><?php echo $pasien->keluhan ?></td>
            <td>
              <a href="/templates/periksa/{{ $pasien->id }}/forms" class="btn btn-sm btn-primary"> Periksa</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
        </div>






    <!--/.col-->
</div>
<!--/.row-->
@endsection
