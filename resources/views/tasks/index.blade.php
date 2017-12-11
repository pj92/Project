@extends("layout");
@section("content");
<html>
<head>
    <title>Index</title>

</head>
<body>

    <div class="row">

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Task #</th>
                <th>Task Name</th>
                <th>Status</th>
                <th>Created On</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($tasks as $task)

            <tr>
                <td>{{$task->id}}</td>
                <td>{{ $task->body }}</td>
                <td>
                    <?php
                       if (!($task->complete == 1)){
                            echo "Incompleted";}
                       else {
                               echo "Completed";}
                    ?>
                </td>
                <td>{{$task->created_at->toFormattedDateString()}}</td>
                <td>
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-info">
                        <span class="glyphicon glyphicon-pencil"></span>
                        <a href="/project/public/tasks/{{$task->id}}/edit">Edit</a>
                    </button>
                    <br>
                    <form action="/project/public/tasks/{{$task->id}}/delete" method="post" >
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove-sign"></span>Remove
                        </button>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
            <hr/>
            <div class="btn-group-vertical pull-right">
                <button type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <a class="bg-primary" href="/project/public/tasks/create">Create New Task</a>
                </button>

        </div>
    </div>

</body>
</html>
@endsection;