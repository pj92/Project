@extends('layout')

@section('content')

    <form action="/project/public/tasks/{{$task->id}}/edit" method="post" class="col-sm-4">

        <div class="form-group">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="taskTitle">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="body" value="{{$task->body}}" required>
        </div>
        <div class="form-group">
            <label for="taskStatus">Task Status</label>
            <select class="form-control" id="taskStatus" name="complete" value="{{$task->complete}}">
                <option value="1">Complete</option>
                <option selected value="0">Incomplete</option>
            </select>
        </div>
        <div class="form-group">
            <label for="timestamp">Created at:</label>
            <input class="form-control" type="text" placeholder="{{$task->created_at->toDayDateTimeString()  }}"  readonly>
        </div>
        <div class="form-group">
            <label for="timestamp">Updated at:</label>
            <input class="form-control" type="text" placeholder="{{$task->updated_at->toDayDateTimeString()}}"  readonly>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>

    </form>
    <p>

    <form action="/project/public/tasks/{{$task->id}}/delete" method="post" class="col-sm-4">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger">Delete</button>

    </form>
    </p>

@endsection