@extends('master')
@section('content')

<div class="row col d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card ">
        <form action="/templates/periksa/{{ $pasiens->id }}" method="POST"  class="form-horizontal">
            <div class=" d-flex justify-content-center">
                <strong>Pemeriksaan Pasien</strong>
            </div>
            <div class="card-block">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nama</label>
                        <div class="col-md-9">
                            <input type="text" value="{{$pasiens->namaPasien}}" class="form-control">
                        </div>
                    </div>

                    <!-- <div class="form-group row">
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
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>

                            </select>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="alamat">Alamat</label>
                        <div class="col-md-9">
                            <textarea rows="9" value="{{$pasiens->alamatPasien}}" placeholder="{{$pasiens->alamatPasien}}" class="form-control" ></textarea>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
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

                </div> -->


            </div>
            <div class=" d-flex justify-content-center">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" name="submit" class="btn btn-sm btn-primary">   Submit  </button>
            </div>
            <input type="hidden" name="_method" value="PUT">
        </form>
        </div>






    <!--/.col-->
</div>
<!--/.row-->
@endsection
