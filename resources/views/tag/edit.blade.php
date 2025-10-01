@extends('layouts.main')

@section('content')
    <h2>Редактировать категорию</h2>
    <div class="container-fluid">
        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group mb-3">
                <input type="text" name="title"  value="{{$category->title}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Редактировать">
            </div>
        </form>
    </div>
@endsection


