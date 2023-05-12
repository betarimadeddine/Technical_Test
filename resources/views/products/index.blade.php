@extends('welcome')

@section('title','Technical_Test | Products')

@section('content')


    <h1 class="mt-4">Products</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Liste of Products</li>
    </ol>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary mb-2 float-end" href="{{ route('products.create') }}">New Product</a>
        </div>
    </div>

     <div class="row">
        <div class="col">
            @if (session()->has('seccuss'))
                <div class="alert alert-success" role="alert">
                    {{ session('seccuss') }}
                </div>
            @endif

        </div>
    </div>
    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-list"></i>
                                Liste of Products
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>
                                                    <div class="d-grid gap-2 d-md-block">
                                                        <a class="btn btn-success mb-2 " href="{{ route('products.edit',$product->id) }}">Edit</a>
                                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                            @csrf
                                                            @method('Delete')
                                                            <button class="btn btn-danger mb-2 " type="submit">Delete</button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection
