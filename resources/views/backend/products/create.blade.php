@extends('backend.layouts.master')

@section('content')
    <form action="/backend/products/store" method="post">
        @csrf
        Name: <input type="text" name="name"><br>
        <textarea name="description" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Add New Product">
    </form>
@endsection