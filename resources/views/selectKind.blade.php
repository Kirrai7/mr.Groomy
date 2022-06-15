@extends('header_footer')
@section('main_content')
<link rel="stylesheet" href="public/css/select.css">

<style>
    #leftSquare {
        background-image: url(public/img/form/1f.jpg);
    }

</style>
<div class="content">

    <div class="animated slideInLeft" id="square">
        <div class="animated bounceInUp" id="leftSquare">
            <div class="animated bounceInUp" id="circle">
                <img class="brand img-responsive" src="public/img/form/2f.jpg" />
            </div>

            <h2 id="title">Добро пожаловать</h2>
            <h3 id="subtitle">Мы ждём именно тебя. Заходи, не стесняйся.</h3>

        </div>

        <div class="animated bounceInDown" id="rightSquare">
            <div id="container">
            @if(session('success'))
<div class="alert alert-success">
    <h6 style="color: black">{{session('success')}}</h6>
    
    </div>
@endif
                <h1 class="signup">Записаться</h1>
                <!-- <form className="animated slideInLeft">
                    <input class="optin" type="text" placeholder="name" />
                    <input class="optin" type="text" placeholder="email" />
                    <input class="optin" type="password" placeholder="password" /> 
                </form>
                <button class="animated infinite pulse button btn btn-info" id="but2"> 
                    <span><i class="fa fa-twitter" aria-hidden="true"></i></span><span id="twitter">Sign in with
                        Twitter</span>
                </button> -->
                <form action="{{route('selectServices')}}" method="POST" enctype="multipart/form-data" id="Form1"
                    className="animated slideInLeft">
                    @method('GET')
                    @csrf
                    <input type="text" required name="name" class="optin" id="name" placeholder="Имя">
                    <input type="number" name="weight" class="optin" id="weight" placeholder="Вес">
                    
                    <!-- <label for="myMultiselect">Выберите вид питомца</label> -->
                    <select name="breed" id="kind" class="form-select optin" value="выберите" required>
                        <option disabled selected>Выберите вид </option>
                        @foreach ($kind as $kind)
                        <option value="{{$kind['id']}}" name="breed" id="kind">{{$kind['title']}} </option>
                        @endforeach
                    </select>
                    <button type="input" id="but2" class="animated infinite pulse button btn btn-info js-button"
                        value="Отправить">Продолжить</button>
                </form>
                
                </h3>
            </div>
        </div>
    </div>


</div>

</div>
@endsection
