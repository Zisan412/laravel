@extends('layouts.master')

@section('title', 'Task 21')

@section('content')
    <form>
        <input type="text" name="title" placeholder="Task Title">
        <br>
        <textarea name="description" placeholder="Description"></textarea>
        <br>
        <button type="submit">Add Task</button>
    </form>
@endsection