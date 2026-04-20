@extends('layouts.master')

@section('content')
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <form action="/task45/store" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <br>
        <textarea name="description" placeholder="Description"></textarea>
        <br>
        <button type="submit">Add Task</button>
    </form>
@endsection