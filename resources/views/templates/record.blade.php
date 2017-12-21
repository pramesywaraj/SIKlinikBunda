@extends('master-pasien')
@section('content')

<div class="row col d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card ">
        <form action="/templates/forms" method="POST"  class="form-horizontal">
            <div class=" d-flex justify-content-center">
                <h3><strong>Detail Data Medis Pasien</strong></h3>
            </div>
            <div class="card-block">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" id="name" name="namaPasien" class="form-control" value="{{$pasiens->namaPasien}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nomer Antrian</label>
                        <div class="col-md-9">
                            <input type="number" id="noAntrian" name="noAntrian" class="form-control" value="{{$pasiens->noAntrian}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Status</label>
                        <div class="col-md-9">
                            <input type="text" id="status" name="status" class="form-control" value="{{$pasiens->status}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nomer Antrian</label>
                        <div class="col-md-9">
                            <input type="text" id="jeniskelamin" name="jeniskelamin" class="form-control" value="{{$pasiens->jeniskelamin}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="alamat">Alamat</label>
                        <div class="col-md-9">
                            <textarea name="alamatPasien" rows="9" class="form-control" value="{{$pasiens->alamatPasien}}" placeholder="{{$pasiens->alamatPasien}}" disabled></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="tempatlahir">Tempat Lahir</label>
                        <div class="col-md-9">
                            <input type="text" id="tempatlahir" name="tempatlahir" class="form-control" value="{{$pasiens->tempatlahir}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="tgllahir">Tanggal Lahir</label>
                        <div class="col-md-9">
                            <input type="date" id="tgllahir" name="tanggallahir" class="form-control" value="{{$pasiens->tanggallahir}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="phone">No. Telepon</label>
                        <div class="col-md-9">
                            <input type="text" id="phone" name="phone" class="form-control" value="{{$pasiens->phone}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="keluhan">Keluhan</label>
                        <div class="col-md-9">
                            <textarea  name="keluhan" rows="9" class="form-control" value="{{$pasiens->keluhan}}" placeholder="{{$pasiens->keluhan}}" readonly></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="poli">Jenis Poli</label>
                        <div class="col-md-9">
                            <input type="text" id="poli" name="poli" class="form-control" value="{{$pasiens->poli}}" disabled>
                        </div>
                    </div>


            </div>
            <div class=" d-flex justify-content-center">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" name="submit" class="btn btn-sm btn-primary">   Perbarui  </button>
            </div>
        </form>
        </div>






    <!--/.col-->
</div>
<!--/.row-->
@endsection
