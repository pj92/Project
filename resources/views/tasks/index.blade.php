@extends("layout")
@section("content")
<html>
<head>

</head>
<body>
<?php //echo '<pre>'; print_r($tasks);exit;?>
@if(empty($tasks))
    <a href="/project/public/tasks/create"  class="btn btn-geckoboard">
    <span class="glyphicon glyphicon-chevron-right"></span> Create New Task
</a>
@else
    <div class="row">

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Task #</th>
                <th>Task Name</th>
                <th>Status</th>
                <th>Created On</th>
                <th>Updated On</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1;?>
            @foreach ($tasks as $task)
            <tr>
           <!-- <td>{{$task->id}}</td> -->
                <td>{{$i}}</td>
                <td>{{ $task->body }}</td>
                <td>
                    <?php
                       if (!($task->complete == 1)){
                            echo "Incompleted";}
                       else {
                               echo "Completed";}
                    ?>
                </td>
                <td>{{$task->created_at->toDayDateTimeString()}}</td>
               <td>{{$task->updated_at->toDayDateTimeString()}}</td>
                <td>
                <div class="btn-group-vertical">
                    <a href="/project/public/tasks/{{$task->id}}" class="btn btn-info">
                        <span class="glyphicon glyphicon-eye-open"></span> Show
                    </a>
                    <br>
                    <a href="/project/public/tasks/{{$task->id}}/edit" class="btn btn-warning">
                        <span class="glyphicon glyphicon-pencil"></span> Edit
                    </a>
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
            <?php $i++;?>
            @endforeach
            </tbody>
        </table>
            <hr/>
            <div class="pull-right">
                <a href="/project/public/tasks/create"  class="btn btn-geckoboard">
                    <span class="glyphicon glyphicon-chevron-right"></span> Create New Task
                    </a>




            </div>
    </div>
@endif

</body>
</html>
@endsection