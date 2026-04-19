@extends('layouts.master')

@section('title', 'Task 20')

@section('content')
    <ul>
        @for($i = 1; $i <= 5; $i++)
            <li>Task {{ $i }}</li>
        @endfor
    </ul>
@endsection