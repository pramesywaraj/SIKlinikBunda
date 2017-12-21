@extends('master')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Antrian
                </div>
                <div class="card-block">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No. Antrian</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Jenis Poli</th>
                            </tr>
                        </thead>
                        <tbody>
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
                          <tr>
                              <td>A1</td>
                              <td><?php echo $pasien->namaPasien ?></td>
                              <td><?php echo $status ?></td>
                              <td><?php echo $poli ?></td>
                              <td>
                                <a href="/templates/periksa/{{ $pasien->id }}/forms" class="btn btn-sm btn-primary"> Periksa</a>
                              </td>
                          </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
</div>
@endsection
