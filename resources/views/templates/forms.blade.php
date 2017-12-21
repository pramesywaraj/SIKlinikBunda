@extends('master-pasien')
@section('content')

<div class="row col d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card ">
        <form action="/templates/forms" method="POST"  class="form-horizontal">
            <div class=" d-flex justify-content-center">
                <h3><strong>Pendaftaran Pasien</strong></h3>
            </div>
            <div class="card-block">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" id="name" name="namaPasien" class="form-control" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nomer Antrian</label>
                        <div class="col-md-9">
                            <input type="number" id="noAntrian" name="noAntrian" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-3 form-control-label">Status</label>
                    <div class="col-md-9">
                        <select name="status" class="form-control">
                            <option value="0">Umum</option>
                            <option value="1">BPJS</option>

                        </select>
                    </div>
                </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Jenis Kelamin</label>
                        <div class="col-md-9">
                            <select name="jeniskelamin" class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="alamat">Alamat</label>
                        <div class="col-md-9">
                            <textarea name="alamatPasien" rows="9" class="form-control" placeholder="Alamat Pasien"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="tempatlahir">Tempat Lahir</label>
                        <div class="col-md-9">
                            <input type="text" id="tempatlahir" name="tempatlahir" class="form-control" placeholder="Tempat Lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="tgllahir">Tanggal Lahir</label>
                        <div class="col-md-9">
                            <input type="date" id="tgllahir" name="tanggallahir" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="phone">No. Telepon</label>
                        <div class="col-md-9">
                            <input type="number" id="phone" name="phone" class="form-control" placeholder="No. Telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="keluhan">Keluhan</label>
                        <div class="col-md-9">
                            <textarea  name="keluhan" rows="9" class="form-control" placeholder="Keluhan Pasien"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="poli">Jenis Poli</label>
                    <div class="col-md-9">
                        <select name="poli" class="form-control">
                            <option value="0">Umum</option>
                            <option value="1">Gigi</option>
                            <option value="2">KIA</option>
                        </select>
                    </div>

                </div>


            </div>
            <div class=" d-flex justify-content-center">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" name="submit" class="btn btn-sm btn-primary">   Submit  </button>
            </div>
        </form>
        </div>






    <!--/.col-->
</div>
<!--/.row-->
@endsection
