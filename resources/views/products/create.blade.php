@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Add New Product</h2>
        </div>
        <div class="float-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
        <br>
    </div>
</div>

@if ($errors->Any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input. <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <br><br>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea name="detail" class="form-control" style="height:150px" placeholder="Detail"></textarea>
            </div>
        </div>
        <br><br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
    </div>
</form>
@endsection