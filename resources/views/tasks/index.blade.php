@extends("layout");
@section("content");
<html>
<head>
    <title>Index</title>

</head>
<body>
    <h2>You have following task left:</h2>
<ul>
    @foreach ($tasks as $task)

        <li>
            <a href="/tasks/{{ $task->id}}">

                    {{ $task->body }} </a>
        </li>


    @endforeach
</ul>
</body>
</html>
@endsection;