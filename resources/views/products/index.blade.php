<h1>Showing All Products</h1>

@foreach($products as $product)
    <h2>ID: {{$product->id}}: {{$product->name}}</h2>
    <p>{{$product->description}}</p>
@endforeach

{{--{{$products->render()}}--}}