@extends('layouts.main')

@section('content')
    <h2>Редактировать цвет</h2>
    <div class="container-fluid">
        <form action="{{ route('color.update', $color->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group mb-3">
                <input type="text" name="title"  value="{{$color->title}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Редактировать">
            </div>
        </form>
    </div>
@endsection


