@extends('layouts.master')

@section('title', 'Task 22')

@section('content')
    <form>
        @csrf
        <input type="text" name="title" placeholder="Task Title">
        <br>
        <textarea name="description" placeholder="Description"></textarea>
        <br>
        <button type="submit">Add Task</button>
    </form>
@endsection