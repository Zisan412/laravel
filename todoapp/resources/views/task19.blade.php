@extends('layouts.master')

@section('title', 'Task 19')

@section('content')
    @switch($status)
        @case('pending')
            <p>Task is Pending ⏳</p>
            @break
        @case('completed')
            <p>Task is Completed ✅</p>
            @break
        @default
            <p>Unknown Status</p>
    @endswitch
@endsection