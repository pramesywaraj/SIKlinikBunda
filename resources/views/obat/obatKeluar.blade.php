@extends('master-apoteker')

@section('content')
<div class="row col d-flex justify-content-center">
<div class="col-md-8">
    <div class="card ">
        <div class=" d-flex justify-content-center">
                <div class="panel-body col-md-10">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(array('route' => ['keluar.update', $obats->id], 'class' => 'form', 'method'=>'PUT')) !!}
                    <div class="form-group">
                        {!! Form::label('Nama Obat') !!}                            
                        {!! Form::text('namaObat', $obats->namaObat, 
                            array('required',
                            'class'=>'form-control',))!!}
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
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection