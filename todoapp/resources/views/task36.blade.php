@extends('layouts.master')

@section('content')
    <form action="{{ route('task.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <br>
        <button type="submit">Add Task</button>
    </form>
@endsection