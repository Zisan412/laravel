@extends('layouts.master')

@section('content')
    <h2>Create New Task</h2>
    <form action="/task34/store" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <br>
        <button type="submit">Add Task</button>
    </form>
@endsection