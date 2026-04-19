@extends('layouts.master')

@section('content')
<form action="/task28/store" method="post">
    @csrf
    @if($errors->any())
        <p style="color:red">Please fix the errors below!</p>
    @endif
    <input type="text" name="title" placeholder="Title">
    <br>
    <textarea name="description" placeholder='description'></textarea>
    <br>
    <button type="submit">Submit</button>
</form>
@endsection