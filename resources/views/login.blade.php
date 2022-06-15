<link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
@extends('header_footer')
@section('main_content')
<h1>Авторизация</h1>
<hr>
<!-- {{--Вывод ошибок --}} -->
@if(session('success'))
<div class="alert alert-success">
    <h6 style="color: black">{{session('success')}}</h6>
    dddd
</div>
@endif
<div class="container" style="margin-top:5%;margin-bottom:11%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Вход</div>

                <div class="card-body">
                    <!-- {{-- Форма авторизации --}} -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="login" class="col-md-4 col-form-label text-md-end">Логин</label>
                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control" name="login"
                                    value="{{ old('login') }}" autocomplete="login" autofocus pattern="^[A-Za-z0-9\-]+"
                                    title="Разрешенные символы: латиница и тире">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"
                                    autocomplete="current-password">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="btnLogin">
                                    Войти
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
