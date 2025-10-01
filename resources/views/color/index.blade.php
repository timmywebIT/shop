@extends('layouts.main')

@section('content')
    <div class="col-sm-6"><h3 class="mb-3">Цвет</h3></div>
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('color.create')}}" class="btn btn-primary">Добавить</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Наименование</th>
                            <th>Цвет</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($colors as $color)
                        <tr>
                            <td>{{ $color->id }}</td>
                            <td><a href="{{ route('color.show', $color->id) }}">{{ $color->title }}</a></td>
                           <td><div style="width: 16px; height: 16px; background: {{ '#' . $color->title }}"></div></td>
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


