@extends('layouts.master')

@section('title', 'Task 16')

@section('content')
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection