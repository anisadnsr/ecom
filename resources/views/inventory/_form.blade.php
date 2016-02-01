@extends('backend_layout')

@section('content')

<div class="container" style="width:60%;  outline: 1px solid orange;">

<h1>{{$mode}} Inventory</h1>

{!! Form::open(['method'=>'post', 'class'=>'form-horizontal']) !!}
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="name" class="control-label col-xs-2">Buku</label>
        <div class="col-xs-5">
            {!! Form::select('book_id', $bookOption, $inventory->book_id, ['class'=>'form-control']) !!}
        </div>
    </div>
        <div class="form-group">
            <label for="name" class="control-label col-xs-2">Stock</label>
            <div class="col-xs-5">
                {!! Form::text('stock', $inventory->stock, ['class'=>'form-control', 'placeholder'=>'Stock']) !!}
            </div>
        </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-6">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
{!! Form::close() !!}

</div>
@stop