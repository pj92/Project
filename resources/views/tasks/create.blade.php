@extends ('layout')

@section('content')

    <h2>Create a task</h2>
    <hr>

    <form method="post" action="/project/public/tasks" class="col-sm-8">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="Title">Title</label>
        <input type="text" class="form-control" id="title" name="body" placeholder="Task title" >
    </div>
    <div class="form-group">
        <label for="status">Task Status</label>
        <select class="form-control" id="taskStatus" name="complete" selected="0">
            <option selected>Status...</option>
            <option value="0">Incomplete</option>
            <option value="1">Complete</option>
        </select>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-geckoboard">Create</button>
    </div>



    @include ('layouts.errors')
</form>

@endsection