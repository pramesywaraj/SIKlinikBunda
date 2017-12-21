@extends('master-apoteker')
<!-- Modal -->
@foreach($obats as $obat)
<div class="modal fade" id="exampleModal3{!! $obat->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal3Label">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        {{ Form::open(['method' => 'DELETE', 'route' => ['obat.destroy', $obat->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@endforeach

@section('content')

<meta http-equiv="refresh" content="10">
<div class="row col d-flex justify-content-center">
    <div class="col-md-12">
        <div class="card ">
          <div class=" d-flex justify-content-center">
              <h3><strong>Antrian Resep</strong></h3>
          </div>
        <table class="table table-striped">
        <thead>
          <tr>
            <th>No. Antrian</th>
            <th>Nama Pasien</th>
            <th>Diagnosa</th>
            <th>Obat</th>
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
            <td><?php echo $pasien->diagnosa ?></td>
            <td><?php echo $pasien->pengobatan ?></td>
            <td>
              <a href="obat/cek/{{ $pasien->id }}" class="btn btn-sm btn-primary"> Proses</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
        </div>

      <!-- data -->

<div class="row col d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card ">
            <div class=" d-flex justify-content-center">
                <h3><strong>Data Obat</strong></h3>
            </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">

                        <thead>
                            <th>Nama Obat</th>
                            <th>Harga</th>
                            <th>Stock</th>
                        </thead>
                        <tbody>
                        @foreach($obats as $obat)
                            <tr>
                                <td>{{$obat->namaObat}}</td>
                                <td>{{$obat->harga}}</td>
                                <td>{{$obat->stock}}</td>
                                <td><a href="{{ route('keluar.edit',$obat->id) }}" class="btn btn-primary">Keluar</a></td>
                                <td><a href="{{ route('masuk.edit',$obat->id) }}" class="btn btn-primary">Masuk</a></td>
                                <td><a href="{{ route('obat.edit',$obat->id) }}" class="btn btn-primary">edit</a></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3{!! $obat->id !!}">
Hapus
</button></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {!!$obats->links();!!}
                    </div>

        </div>
    </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
  Launch demo modal
</button> -->



@endsection
