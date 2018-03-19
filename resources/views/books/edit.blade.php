<h1>Editing Book</h1>

<form action="/books/{{$book->id}}" method="POST">
{{csrf_field()}}
    Title: <input type="text" name="title" value="{{$book->title}}"> <br>
    Year: <input type="text" name="year" value="{{$book->year}}"> <br>
    Publisher: <input type="text" name="publisher" value="{{$book->publisher}}"><br>
    <input type="submit" class="btn btn-info">
</form>