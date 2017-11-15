<html>
<head>
    <title>TO-DO</title>

</head>
<body>
    <h2>You have following task left:</h2>
<ul>
    @foreach ($tasks as $task)

        <a href="/tasks/{{ $task->id}}">

                <li>{{ $task->body }} </li>

        </a>

    @endforeach
</ul>
</body>