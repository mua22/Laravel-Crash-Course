<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<h1>{{$page_title}}</h1>
@foreach($articles as $article)
    <h3>{{$article->title}}</h3>
    Written By: <b><a href="/articles/by/{{$article->user->id}}">{{$article->user->name}}</a></b>
    Written By: <b>{{$article->user->articles_count}}</b>
    <br>
    <p>{{$article->content}}</p>
    <h3>Comments</h3>
    <ul>
        @foreach($article->comments as $comment)
            <li>{{$comment->content}}
                <br>
                <b>
                by: {{$comment->user->name}}</b>
            </li>
        @endforeach
    </ul>

    <h3>Ingredients</h3>
    <ul>
        @foreach($article->ingredients as $ingredient)
            <li>
                <a href="/articles/by/ingredient/{{$ingredient->id}}">{{$ingredient->title}}</a>
            </li>
        @endforeach
    </ul>
    <hr>
    @endforeach

{{$articles->render()}}