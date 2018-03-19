<h1>Create New Book</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/books" method="POST">
{{csrf_field()}}
    Title: <input type="text" name="title" value="{{old('title')}}"> <br>
    Year: <input type="text" name="year" value="{{old('year')}}"><br>
    Publisher: <input type="text" name="publisher" value="{{old('publisher')}}"> <br>
    <input type="submit" class="btn btn-info">
</form>