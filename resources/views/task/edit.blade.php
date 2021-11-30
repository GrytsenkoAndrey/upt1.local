@extends('layouts.app')

@section('page-title')
    Edit
@endsection

@section('main')
    <div class="container">
        <h2>Edit Task</h2>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <form action="{{ route('task.update', $task) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{ $task->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" value="{{ $task->description }}" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
                <div id="app"></div>
            </div>
        </div>
    </div>

@endsection
