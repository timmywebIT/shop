@extends('layouts.main')

@section('content')
    <h2>Добавить тег</h2>
    <div class="container-fluid">
        <form action="{{ route('tag.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Добавить">
            </div>
        </form>
    </div>
@endsection


