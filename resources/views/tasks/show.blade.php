@extends('layouts.app')
@section('content')

<label>Title</label>
<p>{{$tasks->title}}</p>
<label>Deskripsi</label>
<p>{{$tasks->description}}</p>

<a href="{{url('tasks')}}" class="btn btn-danger">Kembali</a>
@endsection