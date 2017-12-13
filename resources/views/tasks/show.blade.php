@extends("layout")
@section("content")
<html>
<head>

</head>

<body>

    <h2>{{ $task->body }} </h2>
    <br>
    <hr>

    <div class="comments">
    <ul class="list-group">
        @foreach($task->comments as $comment)
            <li class="list-group-item">
                {{$comment->body}}
                <BR>
                <strong>
                    Created: {{$comment->created_at->diffForHumans()}}:
                    <br>
                </strong>
            </li>
        @endforeach
    </ul>
    </div>

    <div class="card">
        <div class="card-block">
            <form action="/project/public/tasks/{{$task->id}}/comments" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="body" placeholder="Add Comments here." class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>

            @include('layouts.errors')
        </div>
    </div>

</body>

</html>
@endsection