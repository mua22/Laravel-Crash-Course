<h1>Create New Book</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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