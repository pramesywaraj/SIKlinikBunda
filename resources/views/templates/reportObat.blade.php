@extends('master-admin')
@section('content')


<div class="row col d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card ">
          <div class=" d-flex justify-content-center">
              <h3><strong>Data Obat</strong></h3>
          </div>
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Obat</th>
            <th>Stock Tersedia</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <?php foreach ($obats as $obat){ ?>
            <td><?php echo $obat->namaObat ?></td>
            <td><?php echo $obat->stock ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
        </div>






    <!--/.col-->
</div>
<!--/.row-->
@endsection
