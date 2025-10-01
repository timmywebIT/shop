@extends('layouts.main')

@section('content')
    <div class="col-sm-6"><h3 class="mb-3">Теги</h3></div>
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('tag.create')}}" class="btn btn-primary">Добавить</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Наименование</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td><a href="{{ route('tag.show', $tag->id) }}">{{ $tag->title }}</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection


