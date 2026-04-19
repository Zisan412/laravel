@extends('layouts.master')

@section('content')
<form action="/task25/store" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="title name">
    <br>
    <textarea name="description" placeholder="add description"></textarea>
    <br>
    <button type="submit">submit</button>
</form>
@endsection