@extends('master-apoteker')

@section('content')
<div class="row col d-flex justify-content-center">
<div class="col-md-8">
    <div class="card ">
        <div class=" d-flex justify-content-center">

                <div class="panel-bod col-md-10y">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(array('route' => 'obat.store', 'class' => 'form')) !!}

                    <div class="form-group">
                        {!! Form::label('Nama Obat') !!}
                        {!! Form::text('namaObat', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Nama Obat')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Harga') !!}
                        {!! Form::number('harga', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Harga')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Stock') !!}
                        {!! Form::number('stock', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Stock')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Tambah', 
                        array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection