@extends('layouts.master')

@section('content')
<form action="/task27/store" method="post">
    @csrf
   @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <input type="text" name="title" id="title" placeholder="title name">
    <br>
    <textarea name="description" placeholder="add description"></textarea>
    <br>
    <button type="submit">submit</button>
</form>
@endsection