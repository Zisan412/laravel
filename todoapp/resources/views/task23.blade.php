@extends('layouts.master')

@section('content')
<form action="tasks/store" method="post">
    @csrf
    <input type="text" name="title" placeholder="task title">
    <br>
    <textarea name="description" placeholder="description"></textarea>
    <br>
    <button type="submit">add details</button>
</form>
@endsection