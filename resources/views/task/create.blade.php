@extends('layouts.app')

@section('page-title')
    Create New
@endsection

@section('main')
    <div class="container">
        <h2>Show Task</h2>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <ul>
                @forelse ($tasks as $task)
                    <li>
                        <a href="{{ route('task.show', $task) }}" title="{{ $task->name }}">{{ $task->name }}</a> /{{ $task->created_at->diffForHumans() }}/
                    </li>
                @empty
                </ul>
                    <p>There is no tasks yet</p>
                @endforelse
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <form action="{{ route('task.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Add</button>
                </form>
                <div id="app"></div>
            </div>
        </div>
    </div>

@endsection
