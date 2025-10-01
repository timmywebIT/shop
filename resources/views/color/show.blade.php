@extends('layouts.main')@section('content')
    <h2>Категория</h2>
    <div class="container-fluid">
        <div class="card-header">
            <div class="mb-3">
                <a href="{{route('color.edit', $color->id)}}" class="btn btn-primary">Редактировать</a>
            </div>
            <form action="{{route('color.delete', $color->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Удалить">
            </form>
        </div>
    </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Наименование</td>
                    </tr>

                    <tr>
                        <td>{{ $color->id }}</td>
                        <td>{{ $color->title }}</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection


