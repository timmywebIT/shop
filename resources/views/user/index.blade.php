@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="col-sm-6"><h3 class="mb-3">Пользователи</h3></div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Добавить</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Имя</th>
                                <th>Email</th>
                                <th>Фамилия</th>
                                <th>Возраст</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <a href="{{ route('user.show', $user->id) }}">
                                        {{ $user->name }} {{ $user->patronymic }}
                                    </a>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->surname }}</td>
                                <td>{{ $user->age }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

