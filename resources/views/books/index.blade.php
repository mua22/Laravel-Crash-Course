<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<a href="/books/create" class="btn btn-lg btn-info">Create New Book</a>
composer requir kyslik/column-sortable
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div> <!-- end .flash-message -->
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>title</th>
        <th>year</th>
        <th>publisher</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
           <td>{{$book->id}}</td>
           <td><a href="/books/{{$book->id}}/show">{{$book->title}}</a></td>
           <td>{{$book->year}}</td>
           <td>{{$book->publisher}}</td>
           <td>
               <a href="/books/{{$book->id}}/edit">Edit</a>
               <a href="/books/{{$book->id}}/delete">Delete</a>

           </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{$books->render()}}

