@extends('layouts.master')

@section('content')
<form action="/task24/store" method="post">
    @csrf
    <input type="text" name="title" placeholder="title name">
    <br>
    <textarea name="details" placeholder="enter details"></textarea>
    <br>
    <button type="submit">submit</button>
</form>
@endsection