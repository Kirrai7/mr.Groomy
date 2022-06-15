<link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
@extends('header_footer')
@section('main_content')
<link rel="stylesheet" href="public/css/select.css">

<style>
    #leftSquare2 {
        background-image: url(public/img/form/1f.jpg);
    }

</style>
<!-- {{-- Сообщение о результате --}} -->
<!-- @if (session('success'))
<div class="alert alert-danger" role="alert">
    <h4>{{ session('success') }}</h4>
</div>
@endif -->
<div class="content">

    <div class="animated slideInLeft hidden" id="square2">
        <div class="animated bounceInUp" id="leftSquare2">
            <div class="animated bounceInUp" id="circle2">
            <img class="brand img-responsive" src="public/img/form/2f.jpg" />
            </div>

            <h2 id="title">Добро пожаловать</h2>
            <h3 id="subtitle">Мы ждём именно тебя. Заходи, не стесняйся.</h3>

        </div>

        <div class="animated bounceInDown " id="rightSquare2">
            <div id="container2">
                <h1 class="signup">Записаться</h1>
                <form action="{{route('rec')}}" method="GET" enctype="multipart/form-data" className="animated slideInLeft">
                    @method('GET')
                    @csrf
                    
                    <input type="hidden" name="breed" value="{{$kindTitle->title}}">
                    <input type="hidden" name="name" value={{$name}}>
                    <input type="hidden" name="weight" value={{$weight}}>
                    
                    <div id="reveal-wrap">
                        <p id="reveal-click" class="form-select optin">Выберите услуги</p>
                        <div id="hidden-div">
                            <ul class="optin" style="font-size:13px">
                                <div class="form-check">
                                    @if($kindS<=3) 
                                    @foreach ($servicesDog as $services_d) 
                                    <input type="checkbox" name="services[]" value="{{ $services_d['title'] }}" class="form-check-input">
                                        <label class="form-check-label" for="exampleCheck1"></label>{{ $services_d['title'] }} </label><br>
                                        @endforeach

                                    @else
                                        @foreach ($servicesCat as $services_c)
                                        <input type="checkbox" name="services[]" value="{{ $services_c['title'] }}" class="form-check-input">
                                        <label class="form-check-label"
                                            for="exampleCheck1"></label>{{ $services_c['title'] }} </label><br>
                                        @endforeach
                                    @endif
                                </div>
                            </ul>

                        </div>

                    </div>
                <input type="date" name="date" required class="optin" placeholder="Желаемая дата">
                    <input type="tel" name="number" required class="optin" placeholder="Номер телефона">
                    
                    <button type="submit" id="but2" class="animated infinite pulse button btn btn-info">Отправить</button>
                </form>
               
                
            </div>

        </div>


    </div>
   

</div>

@endsection
