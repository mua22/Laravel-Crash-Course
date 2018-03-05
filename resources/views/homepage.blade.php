@extends('layouts.master')
@section('content')
    <h1>List All products</h1>
    <ol>
    @foreach($products as $p)
        <li>{{$p->name}}</li>
    @endforeach
    </ol>
@endsection