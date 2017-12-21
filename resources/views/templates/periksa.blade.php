@extends('master-dokter')
@section('content')

<div class="row col d-flex justify-content-center">
    <div class="col-md-12">
        <div class="card ">
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Pasien</th>
            <th>Status</th>
            <th>Jenis-Kelamin</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tangggal Lahir</th>
            <th>No. Telepon</th>
            <th>Keluhan</th>
          </tr>
        </thead>
        <tbody>
            <?php $status=""; ?>
            <?php
            if($pasiens->status==0){
              $status="Umum";
            }else{
              $status="BPJS";
            }
            ?>
            <th><?php echo $pasiens->namaPasien ?></th>
            <th><?php echo $status ?></th>
            <th><?php echo $pasiens->jeniskelamin ?></th>
            <th><?php echo $pasiens->alamatPasien ?></th>
            <th><?php echo $pasiens->tempatlahir ?></th>
            <th><?php echo $pasiens->tanggallahir ?></th>
            <th><?php echo $pasiens->phone ?></th>
            <th><?php echo $pasiens->keluhan ?></th>
        </tbody>
        </table>
        </div>




        <div class="row col d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card ">
                <form action="/templates/periksa/{{ $pasiens->id }}" method="POST"  class="form-horizontal">
                    <div class=" d-flex justify-content-center">
                        <h3><strong>Status Diagnosa Pasien</strong></h3>
                    </div>
                    <div class="card-block">
                    <br>
                            <h5><strong>Pemeriksaan Fisik : </strong></h5>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Kesadaran</label>
                                <div class="col-md-9">
                                    <select name="kesadaran" class="form-control">
                                        <option value="Compos menthis">Compos menthis</option>
                                        <option value="Anu">Anu</option>
                                        <option value="Anuu">Anuu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Tinggi Badan</label>
                                <div class="col-md-9">
                                    <input type="text" id="tinggibadan" name="tinggibadan" class="form-control" placeholder="0 cm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Berat Badan</label>
                                <div class="col-md-9">
                                    <input type="text" id="beratbadan" name="beratbadan" class="form-control" placeholder="0 kg">
                                </div>
                            </div>
                            <br>

                            <h5><strong>Tekanan Darah : </strong></h5>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Sistole</label>
                                <div class="col-md-9">
                                    <input type="text" id="sistole" name="sistole" class="form-control" placeholder="0 mmHg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Diastole</label>
                                <div class="col-md-9">
                                    <input type="text" id="diastole" name="diastole" class="form-control" placeholder="0 mmHg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Respiratory Rate</label>
                                <div class="col-md-9">
                                    <input type="text" id="resprate" name="resprate" class="form-control" placeholder="0 mmHg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Heart Rate</label>
                                <div class="col-md-9">
                                    <input type="text" id="heartrate" name="heartrate" class="form-control" placeholder="0 mmHg">
                                </div>
                            </div>
                            <br>
                            <h5><strong>Data : </strong></h5>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="alamat">Anamnesa</label>
                                <div class="col-md-9">
                                    <textarea name="anamnesa" rows="9" class="form-control" placeholder="Anamnesa Pasien"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="alamat">Diagnosa Kerja</label>
                                <div class="col-md-9">
                                    <textarea name="diagnosa" rows="9" class="form-control" placeholder="Diagnosa Pasien"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="alamat">Pengobatan</label>
                                <div class="col-md-9">
                                    <textarea name="pengobatan" rows="9" class="form-control" placeholder="Diagnosa Pasien"></textarea>
                                </div>
                            </div>


                        </div>


                    </div>
                    <div class=" d-flex justify-content-center">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" name="submit" value="edit" class="btn btn-sm btn-primary">   Konfirmasi Hasil Diagnosa  </button>
                    </div>

                    <input type="hidden" name="_method" value="PUT">
                </form>
                </div>






            <!--/.col-->
        </div>




    <!--/.col-->
</div>
<!-- <script type="text/javascript">
      $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
          type :'get',
          url  :'{{URL::to('hasilsearch')}}',
          data : {'search':$value},
          success:function(data){
            // console.log(data);
            $('tbody').html(data);
          }
        });
      })
</script> -->
<!--/.row-->
@endsection
