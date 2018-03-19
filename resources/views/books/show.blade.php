<h2>{{$book->title}}</h2>
<b>ID</b> {{$book->id}} <br>
<b>Publisher</b>{{$book->publisher}}
<hr>
Created AT: {{$book->created_at}} <br>
Updated AT: {{$book->updated_at->diffForHumans()}} <br>
<a href="{{URL::previous()}}" class="btn">Go Back</a>