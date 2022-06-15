@extends('header_footer')
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/home.css">

    <!-- Подключаем CSS слайдера -->
    <link rel="stylesheet" href="public/css/slider1.css">

    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/uikit.min.css" />
    <script src="public/js/uikit.min.js"></script>
    <script src="public/js/uikit-icons.min.js"></script>
    <style>
        .why {
            background-image: url(public/img/why2.jpg);
        }

    </style>


<body>
    @section('main_content')
    <div clas="" style="overflow-x: hidden">

        <img src="public/img/test/111.png" alt="" class="img_gl">

        <div class="wrapper">
            <span class="obs-el" id="obs-el">
                <h2>Акции</h2>
            </span>
        </div>

        <!-- Разметка слайдера -->
        <div class="slider">
            @foreach($stock as $stock)
            <div class="item">

                <div>
                    <img src="{{$stock->photo}}" alt="Первый слайд">
                    <div class="textsl" style="text-align:center">{{$stock->text}}</div>
                </div>

            </div>
            @endforeach

            <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a>
        </div>
    </div>
    
    <!-- Почему мы -->
    <div class="why">
        <h2>Почему стоит выбрать нас?</h2>
        <div class="animate__pulse wow why1">
            <img src="public/img/icon/icons8-мужчина-пользователь-90.png" alt="">
            <h3>Квалифицированный персонал</h3><br>
            <span>Все наши сотрудники имеют профильное образование, а также множество дополнительных
                сертификатов.</span>
        </div>
        <div class="animate__pulse wow why2">
            <img src="public/img/icon/icons8-обучение-собак-100.png" alt="" class="why_img">
            <h3>Индивидуальный подход</h3><br>
            <span>Каждый наш сотрудник знает, что все питомцы имеют свой характер и привычки. Грумер понимает, что нужно
                животному, чтобы не испытывать стресс.</span>
        </div>
        <div class="animate__pulse wow why3">
            <img src="public/img/icon/icons8-машинка-для-стрижки-90.png" alt="">
            <h3>Профессиональное оборудование</h3><br>
            <span> Всё наше оборудование обновляется раз в несколько лет, чтобы не отставать от новых технологий.</span>
        </div>
    </div>

    <!-- галерея -->
    <div id="gallery">

        <div class="container">
            <h1 class="h3 text-center my-4" id="gallery"></h1>
            <div class="wrapper">
                <span class="obs-el1" id="obs-el1">
                    <h2>Галерея</h2>
                </span>
            </div>
            <div class="row uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                @foreach($gallery as $photo)
                <div class="col-3 thumb">
                    <a class="uk-inline" href="{{$photo->photo}}">
                        <img class="img-fluid" src="{{$photo->photo}}" alt="{{$photo->photo}}">
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    </div>

    <script src="public/js/wow.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="public/js/slider1.js"></script>

    <script src="public/js/bootstrap.min.js"></script>

    
    @endsection

</body>

</html>
