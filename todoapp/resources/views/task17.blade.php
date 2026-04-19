@extends('layouts.master')

@section('title', 'Task 17')

@section('content')
    @if($completed)
        <p>Task is Completed ✅</p>
    @else
        <p>Task is Pending ❌</p>
    @endif
@endsection