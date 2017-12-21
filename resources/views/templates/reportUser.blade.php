@extends('master-admin')
@section('content')


<div class="row col d-flex justify-content-center">
    <div class="col-md-12">
        <div class="card ">
          <div class=" d-flex justify-content-center">
              <h3><strong>Data User</strong></h3>
          </div>
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Role</th>
            <th>Deskripsi Role</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <?php foreach ($roles as $role){ ?>
                <?php foreach ($users as $user){
                  if($role->id==$user->id){ ?>
                    <td><?php echo $user->name ?></td>
                    <td><?php echo $role->description ?></td>
                    <td><?php echo $user->email ?></td>
                  <?php } ?>
            </tr>
              <?php } ?>
            <?php } ?>




        </tbody>
      </table>
        </div>






    <!--/.col-->
</div>
<!--/.row-->
@endsection
