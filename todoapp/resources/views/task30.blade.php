@extends('layouts.master')

@section('content')
@if(session('success'))
<p style="color:green">{{session('success')}}</p>
@endif
<form action="/task30/store" method="post">
    @csrf
    <input type="text" name="title" placeholder="title">
    <br>
    <textarea name="description" placeholder="description"></textarea>
    <br>
    <button type="submit">submit</button>
</form>
@endsection