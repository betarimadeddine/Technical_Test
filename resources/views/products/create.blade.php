@extends('welcome')

@section('title','Technical_Test | Products')

@section('style')
<style>
.form-control-select{
                width: 100%;
                height: 60px;
                background: #fff;
                border-radius: 5px;
                border: 1px solid #bfc7cf;
                padding: 10px
    }
</style>

@endsection

@section('content')


    <h1 class="mt-4">Products</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add new product</li>
    </ol>


    <div class="row">
        <div class="col">
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-tablet"></i>
            Add new product
        </div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <label class="mb-1" for="category">Category:</label>
                <div class="form-floating mb-3 ">
                    <select  class="form-control-select" id="category" name="category" >
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <label class="mb-1" for="name">Product Name:</label>
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Product Name" />
                </div>
                <label class="mb-1" for="stock">Stock:</label>
                <div class="form-floating mb-3">
                    <input class="form-control" id="stock" name="stock" type="number" placeholder="Stock" />
                </div>

                <button type="submit" class="btn btn-primary mb-2 float-end" >Add</button>
            </form>
        </div>
    </div>

@endsection
