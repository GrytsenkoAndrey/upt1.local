@extends('layouts.app')

@section('page-title')
    Task Details
@endsection

@section('main')
    <div class="container">
        <h2>Click to Edit :: <a href="{{ route('task.edit', $task) }}" title="Edit">{{ strtoupper($task->name) }}</a></h2>
        <p>{{ $task->description }}</p>
        <p>{{ $task->created_at->format('Y-m-d H:i') }}</p>
        <div id="app" class="col-xs-12 alert-danger">
            <example-component></example-component>
        </div>
    </div>

@endsection
