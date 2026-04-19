@extends('layouts.master')

@section('content')
<form action="/task26/store" method="post">
    @csrf
    @error('title')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <input type="text" name="title" id="title" placeholder="title name">
    <br>
    <textarea name="description" placeholder="add description"></textarea>
    <br>
    <button type="submit">submit</button>
</form>
@endsection