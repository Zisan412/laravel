@extends('layouts.master')

@section('content')
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->title }} - {{ $task->status }}
                <form action="/task48/{{ $task->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>

        @endforeach
    </ul>
@endsection