@extends('layouts.main')

@section('content')
    <h2>Добавить пользователя</h2>
<div class="container-fluid">
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="имя">
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-3">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="email">
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-3">
            <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="password">
            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-3">
            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" placeholder="подтверждение пароля">
        </div>
        <div class="form-group mb-3">
            <input type="text" name="surname" value="{{ old('surname') }}" class="form-control" placeholder="фамилия">
            @error('surname')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-3">
            <input type="text" name="patronymic" value="{{ old('patronymic') }}" class="form-control" placeholder="отчество">
            @error('patronymic')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-3">
            <input type="number" name="age" value="{{ old('age') }}" class="form-control" placeholder="возраст">
            @error('age')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-3">
            <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="адрес">
            @error('address')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-3">
            <select name="gender" class="form-control">
                <option disabled selected>Пол</option>
                <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Мужской</option>
                <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>Женский</option>
            </select>
            @error('gender')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>
        </form>
    </div>
@endsection


