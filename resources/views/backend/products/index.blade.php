@extends('backend.layouts.master')

@section('content')
<a href="/backend/products/create" class="btn btn-success">Add New Product</a>
<table class="table">
    <thead>
    <tr>
        <td>Id</td>
        <td>name</td>
        <td>desc</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>

                <td>Edit <a href="/backend/products/delete/{{$product->id}}" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            @endforeach
    </tbody>
</table>

@endsection