@extends('layouts.master')

@section('title', 'Task 18')

@section('content')
    @unless(count($tasks) > 0)
        <p>No tasks present!</p>
    @endunless
@endsection