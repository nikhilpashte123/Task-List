@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')

<nav class="mb-4">
    <a href="{{ route('tasks.create') }}" 
    class="font-medium text-grey-700 underline decoration-pink-500">Add Task!</a>
</nav>

<div>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" 
            @class(['line-through' => $task->completed])>{{ $task->title }}</a>
        </div>
    @empty
        <div>There are no Tasks!</div>
    @endforelse
</div>

@if ($tasks->count())
<nav>
    {{$tasks->links()}}
</nav>
@endif

@endsection