@extends('products.layout')

@section('content')

<div class="row mt-4">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>CRUD Application</h2>
        </div>
        <div class="float-right">
            <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr class="text-center">
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px" >Action</th>
    </tr>
    @foreach($products as $product)
    <tr class="text-center">
        <td>{{ ++$i }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST" >
                <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links() !!}

@endsection