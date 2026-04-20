@extends('layouts.master')

@section('content')
    <form action="/task47/{{ $task->id }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}">
        <br>
        <textarea name="description">{{ $task->description }}</textarea>
        <br>
        <button type="submit">Update Task</button>
    </form>
@endsection