@extends('header_footer')
@section('main_content')
<h1>Регистрация</h1>
<hr>

<div class="row justify-content-center">

<!-- {{--Вывод ошибок --}} -->
@if ($errors->any())
<div class="row justify-content-center">
<div class="col-md-8 alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
</div>
@endif
<!-- {{-- *************************************Форма --}} -->

<div class="col-md-10">
<form method="POST" action="{{ route('register') }}">
@csrf

<!-- {{-- логин --}} -->
<div class="row mb-3">
<label for="login" class="col-md-4 col-form-label text-md-end">
login </label>
<div class="col-md-6">
<input id="login" type="text" class="form-control" name="login"
value="{{ old('login') }}" required autocomplete="login"
autofocus pattern="^[A-Za-z0-9\-]+"
title="Разрешенные символы: латиница и тире">
</div>
</div>

<!-- {{-- пароль --}} -->
<div class="row mb-3">
<label for="password" class="col-md-4 col-form-label
text-md-end">Пароль</label>
<div class="col-md-6">
<input id="password" type="password" class="form-control"
name="password" minlength="6" required
autocomplete="new-password">
</div>
</div>
<!-- {{-- повтор пароля --}} -->
<div class="row mb-3">
<label for="password-confirm" class="col-md-4 col-form-label
text-md-end">Повторите пароль</label>
<div class="col-md-6">
<input id="password-confirm" type="password" class="form-control"
name="password_confirmation"
required autocomplete="new-password">
</div>
</div>
<!-- {{-- согласие --}} -->
<div class="row mb-3">
<label for="rules" class="col-md-4 col-form-label text-md-end">
Я согласен с правилами регистрации</label>
<div class="col-md-6">
<input id="rules" type="checkbox" name="rules" required autocomplete="rules">
</div>
</div>
<div class="row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">
<b>Зарегистрироваться</b>
</button>
</div>
</div>
</form>
</div>
</div>

@endsection