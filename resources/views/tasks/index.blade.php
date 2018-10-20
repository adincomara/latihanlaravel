@extends('layouts.app')
@section('content')

<h1>LIST TASKS</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <td>NO</td>
            <td>Title</td>
            <td>Deskripsi</td>
            <td colspan="2">Aksi</td>
        </tr>

    </thead>
    <tbody>
        @foreach ($tasks as $key => $task)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    <a href="{{url('tasks', $task->id)}}" class="btn btn-primary">Detail</a>
                </td>
                <td>
                    <a href="{{url('tasks/delete', $task->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach

    </tbody>

</table>
@endsection
